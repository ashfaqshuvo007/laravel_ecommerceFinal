<?php

namespace App\Http\Controllers;
use Cart;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Session;

class CheckoutController extends Controller {

	public function checkout() {
		$all_cat_info = DB::table('category')->get();

		// $checkout_method = view('checkout_method');

		return view('checkout')
		// ->with('checkout_method_content', $checkout_method)
		->with('all_cat', $all_cat_info);
	}

	public function save_customer(Request $request) {

		$user_data = array();

		$user_data['first_name'] = $request->first_name;
		$user_data['last_name'] = $request->last_name;
		$user_data['email_address'] = $request->email_address;
		$user_data['company_name'] = $request->company_name;
		$user_data['password'] = md5($request->password);
		$user_data['mobile_number'] = $request->mobile_number;
		$user_data['address'] = $request->address;
		$user_data['city'] = $request->city;
		$user_data['zip_code'] = $request->zip_code;

		$customer_id = DB::table('users')->insertGetId($user_data);

		Session::put('user_id', $customer_id);

		return Redirect::to('/shipping-method');

	}

	public function customer_login_check(Request $request) {

		$customer_email = $request->email_address;
		$customer_password = md5($request->password);

		$result = DB::table('users')
			->where('email_address', $customer_email)
			->where('password', $customer_password)
			->first();

		if ($result) {
			Session::put('user_name', $result->first_name);
			Session::put('user_id', $result->user_id);

			return Redirect::to('/shipping-method')->send();
		} else {
			Session::put('exception', 'Invalid Email or Password');
			return Redirect::to('/checkout')->send();
		}

	}

	public function shipping_method() {
		$all_cat_info = DB::table('category')->get();

		return view('shipping_method')->with('all_cat', $all_cat_info);
	}

	public function place_order(Request $request) {
		$payment_type = $request->payment_type;

		$data = array();
		$data['payment_type'] = $request->payment_type;

		$payment_id = DB::table('payment')->insertGetId($data);

		/*Start SAVE ORDER*/
		$order_data = array();

		$order_data['customer_id'] = Session::get('user_id');
		$order_data['payment_id'] = $payment_id;
		$order_total = str_replace(',', '', Cart::total());
		$order_data['order_total'] = $order_total;
		$order_id = DB::table('order')->insertGetId($order_data);
		/*END SAVE ORDER*/

		/*Start SAVE ORDER_details*/
		$details_data = array();

		$cart_contents = Cart::content();
		foreach ($cart_contents as $v_content) {
			$datails_data['order_id'] = $order_id;
			$datails_data['product_id'] = $v_content->id;
			$datails_data['product_name'] = $v_content->name;
			$datails_data['product_price'] = $v_content->price;
			$datails_data['product_sale_quantity'] = $v_content->qty;
			DB::table('order_details')
				->insert($datails_data);
		}

		/*END SAVE ORDER_details*/

		if ($payment_type == 'cash_on_delivery') {

			return Redirect::to('/order-success')->send();

		}
		if ($payment_type == 'paypal') {

			/*Put reirection to paypal API page*/
			return Redirect::to('/order-success')->send();

		}

	}

	public function order_success() {

		$all_cat_info = DB::table('category')->get();
		return view('order_success')->with('all_cat', $all_cat_info);

	}

}

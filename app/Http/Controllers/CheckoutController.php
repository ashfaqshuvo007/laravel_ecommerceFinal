<?php

namespace App\Http\Controllers;

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

	public function shipping_method() {
		$all_cat_info = DB::table('category')->get();

		return view('shipping_method')->with('all_cat', $all_cat_info);
	}

}

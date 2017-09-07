<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Session;

class WelcomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$category_info = DB::table('category')->get();

		$product_info = DB::table('product')->get();

		$pro_by_cat = DB::table('product')
			->join('category', 'product.category_id', '=', 'category.category_id')
			->select('product.*', 'category.category_name')
			->get();

		return view('layout')
			->with('all_cat_info', $category_info)
			->with('all_product_info', $product_info)
			->with('pro_by_cat', $pro_by_cat);
	}

	public function user_login() {
		$all_cat_info = DB::table('category')->get();
		return view('user_login')->with('all_cat', $all_cat_info);
	}

	public function user_login_check(Request $request) {

		$email_address = $request->email_address;
		$password = md5($request->password);

		$result = DB::table('users')
			->where('email_address', $email_address)
			->where('password', $password)
			->first();
		if ($result) {
			Session::put('user_name', $result->first_name);
			Session::put('user_id', $result->user_id);

			return Redirect::to('/')->send();
		} else {
			Session::put('exception', 'Invalid Email or Password');
			return Redirect::to('/user-login')->send();
		}

	}

	public function user_logout() {
		Session::put('user_name', NULL);
		Session::put('user_id', NULL);
		// Session::put('message',)
		return Redirect::to('/')->send();
	}

	public function category($id) {

		$pro_by_cat = DB::table('product')
			->where('category_id', $id)
			->get();
		$cat_info = DB::table('category')
			->where('category_id', $id)
			->first();
		$all_cat = DB::table('category')->get();

		return view('category')
			->with('pro_by_cat_info', $pro_by_cat)
			->with('cat_info', $cat_info)
			->with('all_cat', $all_cat);

	}
	public function product_details($id) {
		$product_details = DB::table('product')
			->where('product_id', $id)
			->first();

		$all_cat_info = DB::table('category')->get();

		return view('product_details')
			->with('all_cat', $all_cat_info)
			->with('pro_detail', $product_details);
	}
}

<?php

namespace App\Http\Controllers;

use DB;

class CheckoutController extends Controller {

	public function checkout() {
		$all_cat_info = DB::table('category')->get();

		// $checkout_method = view('checkout_method');

		return view('checkout')
		// ->with('checkout_method_content', $checkout_method)
		->with('all_cat', $all_cat_info);
	}

}

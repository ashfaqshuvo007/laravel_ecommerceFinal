<?php

namespace App\Http\Controllers;
use DB;

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
}

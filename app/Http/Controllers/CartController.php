<?php

namespace App\Http\Controllers;

use Cart;
use DB;
use Illuminate\Http\Request;
use Redirect;

class CartController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add_to_cart(Request $request) {
		$qty = $request->qty;

		$product_id = $request->product_id;

		$product_info = DB::table('product')
			->where('product_id', $product_id)
			->first();
		Cart::add(
			[
				'id' => $product_info->product_id,
				'name' => $product_info->product_name,
				'qty' => $qty,
				'price' => $product_info->new_price,
				'options' => [
					'image' => $product_info->product_image,
				],
			]
		);

		return Redirect::to('show-cart');

	}

	public function show_cart() {

		$all_cat_info = DB::table('category')->get();

		return view('cart')->with('all_cat', $all_cat_info);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}

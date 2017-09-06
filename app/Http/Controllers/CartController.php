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

	public function update_cart(Request $request) {
		$rowid = $request->rowid;
		$qty = $request->qty;

		Cart::update($rowid, $qty);

		return Redirect::to('show-cart');

		//
	}

	public function delete_to_cart($rowid) {
		Cart::remove($rowid);

		// Session::put('message', 'You have deleted one Item from your Cart');
		return Redirect::to('show-cart');
	}

	public function empty_cart() {
		Cart::destroy();
		return Redirect::to('/');
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

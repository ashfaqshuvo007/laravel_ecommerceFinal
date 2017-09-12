<?php

namespace App\Http\Controllers;

use DB;
use Redirect;

class OrderController extends Controller {
	/*MANAGING ORDER FROM ADMIN */

	public function show_order() {

		$order_info = DB::table('order')->get();

		$order = view('admin.pages.show_order')->with('order_info', $order_info);

		return view('admin.admin_master')
			->with('order_info', $order);
	}

	public function processed_order($order_id) {
		DB::table('order')
			->where('order_id', $order_id)
			->update(['order_status' => 'processing']);

		return Redirect::to('/show-order')->send();

	}

	public function delivered_order($order_id) {
		DB::table('order')
			->where('order_id', $order_id)
			->update(['order_status' => 'delivered']);

		return Redirect::to('/show-order')->send();

	}
	public function delete_order($order_id) {
		DB::table('order')
			->where('order_id', $order_id)
			->delete();

		return Redirect::to('/show-order')->send();

	}

	/* SHOWING INVOICE TO ADMIN */
	public function show_invoice($order_id) {

		$order_info = DB::table('order')->where('order_id', $order_id)->first();

		$order_details_info = DB::table('order_details')->where('order_id', $order_info->order_id)->get();

		$customer_info = DB::table('users')->where('user_id', $order_info->customer_id)->first();

		$payment_info = DB::table('payment')->where('payment_id', $order_info->payment_id)->first();

		$invoice = view('admin.pages.show_invoice')
			->with('order_info', $order_info)
			->with('order_details_info', $order_details_info)
			->with('customer_info', $customer_info)
			->with('payment_info', $payment_info);

		return view('admin.admin_master')->with('invoice_details', $invoice);

	}

}

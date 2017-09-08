<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('order_details', function (Blueprint $table) {
			$table->increments('order_products_id');
			$table->integer('order_id');
			$table->integer('product_id');
			$table->string('product_name');
			$table->float('product_price');
			$table->integer('product_sale_quantity');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('order_details');
	}
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Products_Shopping_Carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('product_id');
          $table->unsignedBigInteger('shopping_cart_id');
          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products_Shopping_Carts');
    }
}

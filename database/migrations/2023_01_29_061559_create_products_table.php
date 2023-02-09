<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shortInfo');
            $table->string('category');
            $table->string('material');
            $table->string('materialColor');
            $table->string('productSize');
            $table->string('productQuantity');
            $table->string('productImages');
            $table->string('branchDivision');
            $table->string('branchDistrict');
            $table->string('branchUpazila');
            $table->string('DiscountRange');
            $table->string('discount');
            $table->string('discountType');
            $table->float('price');
            $table->string('status');
            $table->string('warranty');
            $table->string('tags');
            $table->string('barcode');
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
        Schema::dropIfExists('products');
    }
}

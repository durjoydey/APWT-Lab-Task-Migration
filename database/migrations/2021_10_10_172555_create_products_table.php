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
            $table->increments('id');
            $table->string('p_name',10);
            $table->string('p_code',10);
            $table->string('p_desc',10);
            $table->string('p_category',10);
            $table->string('p_price',10);
            $table->string('p_quantity',10);
            $table->string('p_stock_date',10);
            $table->string('p_rating',10);
            $table->string('p_purchased',10);
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

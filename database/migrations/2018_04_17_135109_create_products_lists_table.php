<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_lists', function (Blueprint $table) {
            $table->string('id');
            $table->string('prod_name');
            $table->float('prod_price');
            $table->float('tax');
            $table->string('prod_image');
            $table->text('prod_desc');
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
        Schema::dropIfExists('products_lists');
    }
}

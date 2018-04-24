<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user-id');
            $table->string('first-name');
            $table->string('last-name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip-code');
            $table->integer('credit-card');
            $table->tinyInteger('product');
            $table->timestamps();

            // $table-foreign('user-id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

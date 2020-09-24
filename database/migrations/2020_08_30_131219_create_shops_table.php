<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('shop_categories', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->timestamps();
        });


        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('Parent');
            $table->foreign('Parent')->references('id')->on('shop_categories')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->text('Image');
            $table->timestamps();
        });


        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->text('Description');
            $table->text('Images');
            $table->integer('Price')->nullable();
            $table->integer('Takhfif')->nullable();
            $table->integer('Count')->nullable();
            $table->enum('Status' , ['Available','UnAvailable']);
            $table->enum('Amazing' , ['Yes','No'])->default('No');
            $table->unsignedBigInteger('Category');
            $table->foreign('Category')->on('shop_categories')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('SubCategory')->nullable();
            $table->foreign('SubCategory')->on('sub_categories')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('Brand');
            $table->foreign('Brand')->on('brands')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('shops');
        Schema::dropIfExists('shop_categories');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('sub_categories');


    }
}

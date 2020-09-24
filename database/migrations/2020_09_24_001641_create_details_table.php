<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->text('HowToBuy');
            $table->text('SendProduct');
            $table->text('PaymentMethod');
            $table->text('Questions');
            $table->text('UseSite');
            $table->text('Privacy');
            $table->text('WorkWithCompany');
            $table->text('Jobs');
            $table->text('CallUs');
            $table->text('AboutUs');
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
        Schema::dropIfExists('details');
    }
}

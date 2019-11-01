<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('yacht_id')->unsigned();
            $table->enum('status',['Reserved', 'Active', 'Completed']);
            $table->enum('paymentStatus',['Not paid', 'Paid']);
            $table->enum('paymentPreference',['Cash', 'Card']);
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->enum('catering',['Y', 'N']);
            $table->enum('skipper',['Y', 'N']);
            $table->enum('flottielje',['Y', 'N']);
            $table->enum('groceries',['Y', 'N']);
            $table->enum('transfer',['Y', 'N']);
            $table->enum('insurance',['Y', 'N']);
            $table->enum('childLifejackets',['Y', 'N']);
            $table->enum('fishinggear',['Y', 'N']);
            $table->enum('paddleboard',['Y', 'N']);
            $table->enum('aggreedToTerms',['Y', 'N']);
            
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('yacht_id')->references('id')->on('yachts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

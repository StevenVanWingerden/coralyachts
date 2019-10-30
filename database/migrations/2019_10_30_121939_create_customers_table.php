<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('adress', 100);
            $table->string('zipcode', 10);
            $table->string('city', 100);
            $table->char('country', 2);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->text('internalNotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

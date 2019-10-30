<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('city');
            $table->char('country', 2);
            $table->string('contactperson');
            $table->string('contactphone', 20);
            $table->string('contactemail', 100);
            $table->text('facilities');
            $table->text('directions');
            $table->text('parking');
            $table->enum('catering', ['Y', 'N']);
            $table->enum('skipper', ['Y', 'N']);
            $table->enum('flottielje', ['Y', 'N']);
            $table->enum('groceries', ['Y', 'N']);
            $table->enum('transfer', ['Y', 'N']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ports');
    }
}

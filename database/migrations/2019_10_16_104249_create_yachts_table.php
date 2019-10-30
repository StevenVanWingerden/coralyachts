<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYachtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yachts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('yacht_type_id')->unsigned();
            $table->bigInteger('port_id')->unsigned();
            $table->enum('status',['Available', 'Unavailable']);
            $table->string('name', 100);
            $table->string('code', 20);
            $table->foreign('yacht_type_id')->references('id')->on('yacht_types');
            $table->foreign('port_id')->references('id')->on('ports');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yachts');
    }
}

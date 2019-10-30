<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYachtTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yacht_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code', 20)->unique();
            $table->enum('type', ['Cruiser', 'Motor']);
            $table->double('length', 10, 2);
            $table->double('depth', 10, 2);
            $table->string('engine', 100);
            $table->double('sail', 10, 2);
            $table->integer('cabins1p');
            $table->integer('cabins2p');
            $table->integer('beds');
            $table->integer('toilets');
            $table->integer('showers');
            $table->text('gear');
            $table->text('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yacht_types');
    }
}

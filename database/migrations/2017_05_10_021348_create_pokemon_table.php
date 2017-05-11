<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('monsters', function (Blueprint $table) {


		$table->increments('id');
		$table->timestamps();


		$table->string('name');
		$table->string('type1');
		$table->string('type2')->nullable();
		$table->integer('level'); 


	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('monsters');
    }
}

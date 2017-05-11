<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::create('trainers', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->integer('age');
            $table->string('gender');

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
        Schema::drop('trainers');
    }
}
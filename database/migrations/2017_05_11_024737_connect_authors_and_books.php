<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAuthorsAndBooks extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('monsters', function (Blueprint $table) {

            $table->integer('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')->on('trainers');
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
        Schema::table('monsters', function (Blueprint $table) {


            $table->dropForeign('monsters_trainer_id_foreign');

            $table->dropColumn('trainer_id');
        });
    }
}

<?php

use Illuminate\Database\Seeder;

use App\Monster;

class MonstersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //
        Monster::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bulbasaur',
            'type1' => 'Grass',
            'type2' => 'Poison',
            'level' => 5,
            'trainer_id' => 1,
        ]);

        Monster::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Charmander',
            'type1' => 'Fire',
            'type2' => NULL,
            'level' => 5,
            'trainer_id' => 2,
        ]);

        Monster::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Squirtle',
            'type1' => 'Water',
            'type2' => NULL,
            'level' => 5,
            'trainer_id' => 3,
        ]);
    }
}

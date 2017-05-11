<?php

use Illuminate\Database\Seeder;

use App\Trainer;

class TrainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Will',
            'age' => 25,
            'gender' => 'male',
        ]);

        Trainer::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Oak',
            'age' => 60,
            'gender' => 'male',
        ]);

        Trainer::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dawn',
            'age' => 15,
            'gender' => 'female',
        ]);
    }
}

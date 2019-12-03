<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert(['brand' => 'bmw',
            'model' => Str::random(10),
            'year' => '1998',
            'maxSpeed' => 50,
            'isAutomatic' => true,
            'engine' => Str::random(6),
            'numberOfDoors' => 4]);
    }
}

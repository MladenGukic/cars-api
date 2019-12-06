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
        Car::insert( [
            ['brand' => 'toyota',
            'model' => 'yaris',
            'year' => '2004',
            'maxSpeed' => 200,
            'isAutomatic' => true,
            'engine' => Str::random(6),
            'numberOfDoors' => 4],
        
            ['brand' => 'bmw',
            'model' => Str::random(10),
            'year' => '1998',
            'maxSpeed' => 210,
            'isAutomatic' => false,
            'engine' => 'diesel',
            'numberOfDoors' => 5],

            ['brand' => 'audi',
            'model' => 'Q5',
            'year' => '2004',
            'maxSpeed' => 200,
            'isAutomatic' => true,
            'engine' => Str::random(6),
            'numberOfDoors' => 4],
        
            ['brand' => 'bmw',
            'model' => 'X7',
            'year' => '1998',
            'maxSpeed' => 210,
            'isAutomatic' => false,
            'engine' => 'diesel',
            'numberOfDoors' => 5],

            ['brand' => 'Nissan',
            'model' => 'djuke',
            'year' => '2004',
            'maxSpeed' => 200,
            'isAutomatic' => true,
            'engine' => Str::random(6),
            'numberOfDoors' => 4],
        
            ['brand' => 'Mercedes',
            'model' => 'GLE',
            'year' => '1998',
            'maxSpeed' => 210,
            'isAutomatic' => false,
            'engine' => 'diesel',
            'numberOfDoors' => 5]
        ]);
    }
}

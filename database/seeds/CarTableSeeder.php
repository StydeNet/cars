<?php

use Cars\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'condition' => 'new',
            'price'     => 10000,
            'model_id'  => 1,
        ]);
    }
}

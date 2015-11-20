<?php

use Cars\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create(['name' => '4-Wheel Disc Brakes']);
        Feature::create(['name' => 'ABS Brakes']);
        Feature::create(['name' => '9 Speakers']);
        Feature::create(['name' => 'AM/FM Radio: Siriusxm']);
        Feature::create(['name' => 'Mp3 Decoder']);
        Feature::create(['name' => 'Security System']);
    }
}

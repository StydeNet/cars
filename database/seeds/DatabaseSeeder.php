<?php

class DatabaseSeeder extends \Styde\Seeder\BaseSeeder
{
    protected $truncate = array(
        'cars',
        'features',
        'users'
    );

    protected $seeders = array(
        'User',
        'Feature',
        'Car',
    );
}

<?php

use Cars\Models\Car;
use Cars\Models\Feature;

Route::get('features', function () {

    $car = Car::first();

    $features = Feature::orderBy('name', 'ASC')->lists('name', 'id')->toArray();

    return view('components/features', compact('features', 'car'));
});

Route::post('features', function () {

    $features = Request::get('features');

    Feature::addNewFeatures($features);

    $car = Car::first();
    $car->saveFeatures($features);

    return redirect()->to('features');
});
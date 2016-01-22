<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Cars\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {
    return User::findOrFail($id);
});

Route::get('bootstrap', function () {
    return view('bootstrap');
});

include __DIR__ . '/routes/dropdowns.php';
include __DIR__ . '/routes/features.php';
include __DIR__ . '/routes/autocomplete.php';
<?php

use Cars\Models\User;

Route::get('autocomplete/demo', function () {

    return view('components/autocomplete_demo');

});

Route::get('autocomplete/users', function () {

    $term = Request::get('term');

    return User::findByNameOrEmail($term);
});
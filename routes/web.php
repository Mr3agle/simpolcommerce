<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Josuesin97'
    ]);
});
Route::get('/about', function () {
    return Inertia::render('About', [
        'name' => 'Josuesin97'
    ]);
});

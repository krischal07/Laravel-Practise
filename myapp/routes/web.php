<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // echo "<h1>Hello Krischal this is first laravel page</h1>";
});

Route::get('/about-us', function () {
    return view('about');
    // echo "<h1>ABout us page</h1>";
});

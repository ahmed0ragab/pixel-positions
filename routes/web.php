<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dummy');
});
Route::get('/nav', function () {
    return view('nav');
});

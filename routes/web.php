<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function () {
    Route::get('/', [JobController::class, 'index']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::Post('/jobs', [JobController::class, 'store']);
    Route::post('/logout', [SessionController::class, 'logout']);
});


Route::middleware("guest")->group(function () {

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});


Route::get('/label',function(){
    return view('components.trial.label');
});

Route::get('/input',function(){
    return view('components.trial.input');
});

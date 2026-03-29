<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function () {
    Route::GET('/', [JobController::class, 'index']);
    Route::GET('/search', SearchController::class);
    Route::GET('/tags/{tag:name}', TagController::class);
    Route::GET('/jobs/create', [JobController::class, 'create']);
    Route::POST('/jobs', [JobController::class, 'store']);
    Route::DELETE('/logout', [SessionController::class, 'logout']);
});


Route::middleware("guest")->group(function () {

    Route::GET('/register', [RegisteredUserController::class, 'create']);
    Route::POST('/register', [RegisteredUserController::class, 'store']);

    Route::GET('/login', [SessionController::class, 'create'])->name('login');
    Route::POST('/login', [SessionController::class, 'store']);
});


Route::GET('/label',function(){
    return view('components.trial.label');
});

Route::GET('/input',function(){
    return view('components.trial.input');
});

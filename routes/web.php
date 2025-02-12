<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs', 'index');
//    Route::get('/jobs/create', 'create');
//    Route::post('/jobs', 'store');
//    Route::patch('/jobs/{job}', 'update');
//    Route::delete('/jobs/{job:id}', 'destroy');
//    Route::get('/jobs/{job:id}/edit', 'edit');
//    Route::get('/jobs/{job}', 'show');
//});

//Route::get('/jobs', [JobController::class, 'index']);
//Route::get('/jobs/create', [JobController::class, 'create']);
//Route::post('/jobs', [JobController::class, 'store']);
//Route::patch('/jobs/{job}', [JobController::class, 'update']);
//Route::delete('/jobs/{job:id}', [JobController::class, 'destroy']);
//Route::get('/jobs/{job:id}/edit', [JobController::class, 'edit']);
//Route::get('/jobs/{job}', [JobController::class, 'show']);



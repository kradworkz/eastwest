<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return inertia('Welcome');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/user/import', [App\Http\Controllers\ImportController::class, 'index']);
Route::post('/user/store', [App\Http\Controllers\ImportController::class, 'store']);

Route::get('/specialists', function () {  return inertia('Specialists/Index'); });
Route::get('/teachers', function () {  return inertia('Teachers/Index'); });
Route::get('/teachers/import', function () {  return inertia('Teachers/Import'); });
Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('school', App\Http\Controllers\SchoolController::class);

Route::get('/homes', function () {return inertia('Home/Specialist/Home');});
Route::get('/schools', function () {return inertia('Home/Specialist/Schools');});

require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return inertia('Welcome');});
Route::get('/home', function () {  return inertia('Home/Index'); });

Route::resource('employees', App\Http\Controllers\UserController::class);
Route::post('/employee/import', [App\Http\Controllers\ImportController::class, 'index']);
Route::post('/employee/store', [App\Http\Controllers\ImportController::class, 'store']);

Route::resource('school', App\Http\Controllers\SchoolController::class);

require __DIR__.'/auth.php';
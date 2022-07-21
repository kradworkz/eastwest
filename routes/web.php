<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return inertia('Welcome');});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/user/import', [App\Http\Controllers\ImportController::class, 'index']);
Route::post('/user/store', [App\Http\Controllers\ImportController::class, 'store']);
Route::post('/user/targets', [App\Http\Controllers\UserController::class, 'targets']);
Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('schools', App\Http\Controllers\SchoolController::class);

Route::resource('teachers', App\Http\Controllers\TeacherController::class);
Route::get('/teachers/import', function () {  return inertia('Modules/Teachers/Import'); });
Route::post('/mail', [App\Http\Controllers\TeacherController::class, 'send']);
Route::post('/avail', [App\Http\Controllers\TeacherController::class, 'avail']);
Route::get('/form/{code1}/{code2}', [App\Http\Controllers\TeacherController::class, 'form']);


Route::get('/homes', function () {return inertia('Home/Specialist/Home');});
// Route::get('/schools', function () {return inertia('Home/Specialist/Schools');});

require __DIR__.'/auth.php';
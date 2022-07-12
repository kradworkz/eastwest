<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Api\UserResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    $data = $request->user()->profile;
    $id = $data->id;

    $data = User::with('profile')->with('specialist.municipality.province.region')->where('id',$id)->first();
    
    $data = new UserResource($data);
    return response()->json($data);
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('tasks', TaskController::class);
});

Route::post('/login', [App\Http\Controllers\Api\AuthenticationController::class, 'login']);
// Route::get('/endorsements/{code}', [App\Http\Controllers\Api\EndorsementController::class, 'index']);
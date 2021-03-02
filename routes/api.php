<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostsController;
use App\Http\Controllers\API\CameraController;
use App\Http\Controllers\API\DvrController;
use App\Http\Controllers\API\ClassesController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\ProjectController;

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
    return $request->user();
});
// Route::get('list','Users@list');
Route::apiResource('posts',PostsController::class);
Route::apiResource('Dvr',DvrController::class);
Route::apiResource('Camera',CameraController::class);
Route::apiResource('students',StudentController::class);
Route::apiResource('classes',ClassesController::class);

Route::apiResource('employee',EmployeeController::class);
Route::apiResource('project',ProjectController::class);

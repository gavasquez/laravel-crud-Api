<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\api\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/students', [ StudentController::class, 'index']);

Route::post('/students', [ StudentController::class, 'store']);

Route::get('/students/{id}', [ StudentController::class, 'show']);

Route::delete('/students/{id}', [ StudentController::class, 'destroy']);

Route::put('/students/{id}', [ StudentController::class, 'update']);

Route::patch('/students/{id}', [ StudentController::class, 'updatePartial']);

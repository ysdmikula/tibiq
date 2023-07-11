<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskController::class, "index"]);

Route::get('/task/create', [TaskController::class, "create"]);
Route::post('/task', [TaskController::class, "store"]);
Route::get('/task/{task}/edit', [TaskController::class, "edit"]);
Route::put('/task/{task}', [TaskController::class, "update"]);
Route::delete('/task/{task}', [TaskController::class, "destroy"]);

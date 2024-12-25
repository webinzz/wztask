<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view("/", "page.dashboard");
Route::view("/myday", "page.days");

Route::get('task', [TaskController::class, "index"]);
Route::post('task', [TaskController::class, "store"]);
Route::put('task/{id}', [TaskController::class, "update"]);
Route::delete('task/{id}', [TaskController::class, "destroy"]);
Route::get('task/{status}', [TaskController::class, 'find']);

Route::get('goals', [GoalController::class, "index"]);
Route::post('goals', [GoalController::class, "store"]);
Route::put('goals/{id}', [GoalController::class, "update"]);
Route::delete('goals/{id}', [GoalController::class, "destroy"]);
Route::get('goals/{status}', [GoalController::class, 'find']);


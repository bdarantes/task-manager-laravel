<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Table\TableStartParser;

Route::get('/', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
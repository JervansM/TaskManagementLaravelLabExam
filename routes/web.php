<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\NewTaskController;

Route::view('/', 'layouts/app');
Route::view('/create', 'tasks/create');
Route::view('/edit', 'tasks/edit');
Route::view('/index', 'tasks/index');

Route::resource('tasks', TasksController::class);
Route::resource('tasks', NewTaskController::class);


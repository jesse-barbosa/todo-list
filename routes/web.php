<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Define a rota principal para exibir a lista de tarefas
Route::get('/', [TaskController::class, 'index']);

// Define as rotas de recurso para CRUD de tarefas
Route::resource('tasks', TaskController::class);

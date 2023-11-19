<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunosController::class, 'index']);
Route::get('/alunos/create', [AlunosController::class, 'create']);

Route::post('/alunos/create', [AlunosController::class, 'insert']);

Route::delete('/alunos/delete/{id_aluno}', [AlunosController::class, 'destroy']);

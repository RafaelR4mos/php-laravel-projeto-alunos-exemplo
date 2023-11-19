<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunosController::class, 'index']);
Route::get('/alunos/create', [AlunosController::class, 'create']);
Route::get('alunos/edit/{id_aluno}', [AlunosController::class, 'edit']);

Route::post('/alunos/create', [AlunosController::class, 'insert']);

Route::delete('/alunos/delete/{id_aluno}', [AlunosController::class, 'destroy']);

Route::put('alunos/update/{id_aluno}', [AlunosController::class, 'update']);

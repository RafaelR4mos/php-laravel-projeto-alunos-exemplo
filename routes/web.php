<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::controller(AlunosController::class)->group(function () {
    Route::get('/alunos', 'index')->name('alunos.index');
    Route::get('/alunos/create', 'create')->name('alunos.create');
    Route::get('/alunos/edit/{id_aluno}', 'edit')->name('alunos.edit');
    Route::post('/alunos/create', 'insert')->name('alunos.insert');
    Route::delete('alunos/delete/{id_aluno}', 'destroy')->name('alunos.destroy');
    Route::put('alunos/update/{id_aluno}', 'update')->name('alunos.update');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('auth.authenticate');

    Route::post('/logout', 'logout')->name('auth.logout');

    Route::get('/register', 'cadastro')->name('auth.cadastro');
    Route::post('/register', 'create')->name('auth.create');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aluno;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/aluno/{id}', function (string $id) {
    $aluno = Aluno::find($id);

    return response()->json([
        'user_data' => $aluno
    ]);
});

Route::delete('/aluno/delete/{id}', function (string $id) {
    $aluno = Aluno::find($id);

    if($aluno->delete()) {
        return response()->json([
            'success' => 'Usuário deletado com sucesso!'
        ], 200);
    } else {
        return response()->json([
            'error' => 'Ocorreu um erro ao deletar usuário!'
        ], 422);
    }
});

Route::post('/aluno/create', function (Request $request) {
    $aluno = new Aluno();

    $aluno->nm_aluno = $request->json('nm_aluno');
    $aluno->nm_curso = $request->json('nm_curso');
    $aluno->nu_ano = $request->json('nu_ano');
    $aluno->nu_semestre = $request->json('nu_semestre');

    $aluno->save();
});

Route::put('/aluno/update/{id_aluno}', function (Request $request, int $id_aluno) {
    $aluno = Aluno::find($id_aluno);

    $aluno_editado = [
        'nm_aluno' => $request->json('nm_aluno'),
        'nm_curso' => $request->json('nm_curso'),
        'nu_ano' => $request->json('nu_ano'),
        'nu_semestre' => $request->json('nu_semestre')
    ];

    if($aluno->update($aluno_editado)) {
        return response()->json([
            'successs' => "Tudo certo!"
        ], 200);
    } else {
        return response()->json([
            'error' => 'Algo deu errado!'
        ], 400);
    }
});


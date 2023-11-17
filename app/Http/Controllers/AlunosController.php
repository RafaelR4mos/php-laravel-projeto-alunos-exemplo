<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    public function index()
    {
        //Com limite de busca
        $alunos = Aluno::all()->sortBy('nm_aluno')->take(10);

        //Com Where
        //$alunos = Aluno::where('nm_aluno', 'Aron Renner')->get();

        return view('alunos.index', [
            'alunos' => $alunos
        ]);
    }
}

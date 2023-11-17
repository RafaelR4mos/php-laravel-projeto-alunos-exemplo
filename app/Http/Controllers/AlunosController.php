<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    public function index()
    {
        //Com limite de busca
        $alunos = Aluno::orderBy('created_at', 'desc')->take(15)->get();

        //Com Where
        //$alunos = Aluno::where('nm_aluno', 'Aron Renner')->get();

        return view('alunos.index', [
            'alunos' => $alunos
        ]);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function insert(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nm_aluno = $request->input('nm_aluno');
        $aluno->nm_curso = $request->input('nm_curso');
        $aluno->nu_ano = $request->input('nu_ano');
        $aluno->nu_semestre = $request->input('nu_semestre');

        $aluno->save();

        return redirect('alunos');
    }
}

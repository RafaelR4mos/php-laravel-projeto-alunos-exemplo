<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = [
            "Jésica",
            "João",
            "Paulo",
            "Jefferson",
        ];

        return view('alunos.index', [
            'alunos' => $alunos
        ]);
    }
}

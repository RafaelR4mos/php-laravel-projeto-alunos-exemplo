<x-layout title="Alunos">
    <ul class="list-group">
        @foreach($alunos as $aluno)
            <li class="list-group-item"> {{$aluno->nm_aluno}} </li>
        @endforeach
    </ul>

    <a href="alunos/create" class="btn btn-dark mt-2">Adicionar Aluno</a>
</x-layout>

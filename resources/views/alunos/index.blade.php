<x-layout title="Alunos">
    <ul class="list-group">
        @foreach($alunos as $aluno)
            <li class="list-group-item"> {{$aluno}} </li>
        @endforeach
    </ul>

    <a href="series/create" class="btn btn-dark mt-2">Adicionar série</a>
</x-layout>

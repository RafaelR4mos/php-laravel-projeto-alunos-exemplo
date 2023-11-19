<x-layout title="Alunos">
    <ul class="list-group">
        @foreach($alunos as $aluno)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$aluno->nm_aluno}}
                <form action="/alunos/delete/{{$aluno->cd_aluno}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Deletar Aluno</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="alunos/create" class="btn btn-dark mt-2 mb-2">Adicionar Aluno</a>
</x-layout>

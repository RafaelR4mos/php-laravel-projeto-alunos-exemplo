<x-layout title="Alunos">
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach($alunos as $aluno)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$aluno->nm_aluno}}

                @auth
                <div class="d-flex gap-2">
                    <form action="/alunos/delete/{{$aluno->cd_aluno}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar Aluno</button>
                    </form>
                    <a class="btn btn-warning" href="/alunos/edit/{{$aluno->cd_aluno}}">Editar aluno</a>
                </div>
                @endauth
            </li>
        @endforeach
    </ul>

    @auth
    <a href="alunos/create" class="btn btn-dark mt-2">Adicionar Aluno</a>
    @endauth
</x-layout>

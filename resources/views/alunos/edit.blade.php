<x-layout title="Editar Aluno - {{$aluno->nm_aluno}}">
    <form action="/alunos/update/{{$aluno->cd_aluno}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nm_aluno" class="form-label">Nome Aluno</label>
            <input class="form-control" name="nm_aluno" value="{{$aluno->nm_aluno}}" type="text" id="nm_aluno" placeholder="Nome do aluno" required>
        </div>
        <div class="mb-3">
            <label for="nm_curso" class="form-label">Nome Curso</label>
            <input class="form-control" name="nm_curso" value="{{$aluno->nm_curso}}" type="text" id="nm_curso" placeholder="Nome do curso" required>
        </div>
        <div class="mb-3">
            <label for="nu_ano" class="form-label">Ano do curso</label>
            <input class="form-control" name="nu_ano" value="{{$aluno->nu_ano}}" type="number" id="nu_ano" placeholder="2020" required>
        </div>
        <div class="mb-3">
            <label for="nu_semestre" class="form-label">Número do semestre atual</label>
            <input class="form-control" name="nu_semestre" value="{{$aluno->nu_semestre}}" type="number" id="nu_semestre" max="10" placeholder="1" required>
        </div>

        <button class="btn btn-dark" type="submit">Editar Aluno</button>
    </form>
</x-layout>

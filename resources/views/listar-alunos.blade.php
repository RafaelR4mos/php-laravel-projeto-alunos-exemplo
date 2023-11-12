<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar alunos</title>
</head>
<body>

<h1>Listar alunos</h1>
<hr>

<ul>
    @foreach($alunos as $aluno)
        <li> {{$aluno}} </li>
    @endforeach
</ul>

</body>
</html>

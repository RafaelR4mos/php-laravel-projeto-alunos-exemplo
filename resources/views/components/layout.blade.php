<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Estilos Bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    >

</head>
<body>
    <nav class="navbar navbar-light bg-light d-flex justify-content-between align-items-center">
        <div class="container">
            <a class="navbar-brand" href="{{route('alunos.index')}}">Controle de alunos</a>

            @auth
            <form action="{{route('auth.logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">Logout</button>
            </form>
            @endauth

            @guest
            <a href="{{route('login')}}" class="btn btn-dark">Faça login</a>
            @endguest
        </div>
    </nav>

    <main class="container mt-4">
        <h1>{{ $title }}</h1>
        <hr>

        <!-- conteúdo dinamico -->
        {{ $slot }}
    </main>

    <!-- scripts - parte lógica bootstrap -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
    </script>
</body>
</html>

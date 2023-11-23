<x-layout title="Login">
    <div class="container-sm">
        <form action="{{ route('auth.authenticate') }}" method="POST" class="card p-4 container-sm">
            @csrf
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="email@email.com" autofocus class="form-control" required>
            </div>

            <div class="mt-2">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" name="password" placeholder="sua senha" class="form-control" required>
            </div>

                <button class="btn btn-dark mt-4" type="submit">Entrar</button>
                <a href="{{route('auth.cadastro')}}" class="btn btn-secondary mt-2">Crie uma conta</a>
        </form>
    </div>
</x-layout>

<x-layout title="Criar conta">
    <div class="container-sm">
        <form action="{{ route('auth.create') }}" method="POST" class="card p-4 container-sm">
            @csrf
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="email@email.com" class="form-control" autofocus required>
            </div>

            <div class="mt-2">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="seu nome" class="form-control" required>
            </div>

            <div class="mt-2">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" name="password" placeholder="sua senha" class="form-control" required>
            </div>

                <button class="btn btn-dark mt-4" type="submit">Criar conta</button>
                <a href="{{ route('auth.login') }}" class="link text-center mt-2">Já possuo uma conta</a>
        </form>
    </div>
</x-layout>

<x-layout title="Criar conta">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-sm">
        <form action="{{ route('auth.create') }}" method="POST" class="card p-4 container-sm">
            @csrf
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="email@email.com" class="form-control" autofocus required>
            </div>

            <div class="mt-2">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="seu nome" class="form-control" required>
            </div>

            <div class="mt-2">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" value="{{old('password')}}" name="password" placeholder="sua senha" class="form-control" required>
            </div>

            <div class="mt-2">
                <label for="password_confirmation" class="form-label">Confirme sua Senha</label>
                <input type="password" id="password_confirmation" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="confirme sua senha" class="form-control" required>
            </div>

                <button class="btn btn-dark mt-4" type="submit">Criar conta</button>
                <a href="{{ route('login') }}" class="link text-center mt-2">Já possuo uma conta</a>
        </form>
    </div>
</x-layout>

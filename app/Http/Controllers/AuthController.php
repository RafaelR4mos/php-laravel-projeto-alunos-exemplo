<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function cadastro()
    {
        return view('auth.cadastro');
    }

    public function authenticate(Request $request)
    {
        $userData = $request->only(['email', 'password']);

        if(!Auth::attempt($userData)) {
            return redirect()->back();
        }

        return redirect()->route('alunos.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'name' => ['required', 'min:3'],
            'password' => ['required', 'min:6', 'required_with:password_confirmation', 'same:password_confirmation'],
            'password_confirmation' => ['min:6']
        ]);

        $userData = $request->only(['email', 'password', 'name']);
        $userData['password'] = Hash::make($userData['password']);

        $user = User::create($userData);
        Auth::login($user);

        return redirect()->route('alunos.index')->with('mensagem.sucesso', "Usuário '{$user->name}' cadastrado com sucesso!");
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

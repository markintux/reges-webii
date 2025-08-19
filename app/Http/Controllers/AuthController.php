<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('app.login');
    }

    public function login(AuthRequest $request)
    {
        // recebe as credenciais validadas do formulário de login
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            // se as credenciais forem válidas, redireciona para o dashboard
            return redirect()->route('dashboard')->with('success', 'Login realizado com sucesso!');
        }

        // se as credenciais não forem válidas, redireciona de volta com erro
        return back()->withErrors(['email' => 'As credenciais fornecidas não são válidas.']);

    }

    public function logout()
    {
        // realiza o logout do usuário autenticado
        Auth::logout();

        // redireciona para a página de login com uma mensagem de sucesso
        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }

}

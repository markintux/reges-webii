<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('app.register');
    }

    public function store(UserRequest $request)
    {
        // valida a requisição
        $data = $request->validated();

        // cadastra no banco de dados
         User::create($data);

         // redireciona em caso de sucesso
        return redirect()->route('user.create')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function edit()
    {
        // Pega o usuário autenticado
        $user = auth()->user();

        // Retorna a view de edição de perfil com os dados do usuário
        return view('app.users.edit', compact('user'));
    }

    public function update(UserRequest $request)
    {
        // Pega o usuário autenticado
        $user = auth()->user();

        // Dados validados
        $data = $request->validated();

        // Atualiza os dados do usuário
        $user->update($data);

        // Redireciona com mensagem de sucesso
        return redirect()->route('user.edit')->with('success', 'Perfil atualizado com sucesso!');

    }

}

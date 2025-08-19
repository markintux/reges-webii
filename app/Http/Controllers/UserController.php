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

}

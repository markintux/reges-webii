<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReminderRequest;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     * Exibe uma lista de todos os recursos.
     */
    public function index()
    {
        // busca os lembretes com o método paginate
        $reminders = Reminder::orderBy('remind_at', 'desc')->paginate(3);

        // retorna a view com os lembretes
        return view('app.reminders.index', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     * Exibe o formulário para a criação de um novo recurso.
     */
    public function create()
    {
        return view('app.reminders.create');
    }

    /**
     * Store a newly created resource in storage.
     * Armazena um novo recurso no banco de dados.
     */
    public function store(ReminderRequest $request)
    {
        // valida a requisição
        $data = $request->validated();

        // cadastra no banco de dados
        Reminder::create($data);

        // redireciona em caso de sucesso
        return redirect()->route('reminders.create')->with('success', 'Lembrete cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reminder $reminder)
    {
        // retorna a view com o lembrete
        return view('app.reminders.show', compact('reminder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminder $reminder)
    {
        // retorna a view com o lembrete
        return view('app.reminders.edit', compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReminderRequest $request, Reminder $reminder)
    {
        // valida a requisição
        $data = $request->validated();

        // atualiza o lembrete no banco de dados
        $reminder->update($data);

        // redireciona em caso de sucesso
        return redirect()->route('reminders.edit', $reminder)->with('success', 'Lembrete atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        //
    }
}

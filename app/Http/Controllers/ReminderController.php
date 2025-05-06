<?php

namespace App\Http\Controllers;

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
        // busca todos os lembretes
        // $reminders = Reminder::all();

        // busca os lembretes com o método paginate
        $reminders = Reminder::orderBy('remind_at', 'desc')->paginate(2);

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
    public function store(Request $request)
    {
        // dump and die
        //dd($request->all());

        // valida a requisição
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'remind_at' => 'required|date_format:Y-m-d\TH:i',
            'done' => 'required|boolean',
        ],[
            'title.required' => 'O título é obrigatório.',
            'title.string' => 'O título deve ser uma sequência de caracteres.',
            'title.max' => 'O título deve ter no máximo 255 caracteres.',
            'description.string' => 'A descrição deve ser uma sequência de caracteres.',
            'remind_at.required' => 'A data e hora do lembrete são obrigatórias.',
            'remind_at.date_format' => 'A data e hora do lembrete devem estar no formato AAAA-MM-DDThh:mm.',
            'done.required' => 'O campo "feito" é obrigatório.',
            'done.boolean' => 'O campo "feito" deve ser verdadeiro ou falso.',
        ]);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminder $reminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reminder $reminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // exibe a view do dashboard
    public function index(Request $request)
    {
        // recebe o valor do campo search_date
        $searchDate = $request->input('search_date');

        // se o usuario entrar com a data, formata para o formato de banco de dados
        // se não, entra com a data atual já formatada para o banco de dados
        $selectedDate = $searchDate ? Carbon::parse($searchDate) : Carbon::today();

        // pesquisa no banco de dados os lembretes para a data selecionada
        $reminders = Reminder::whereDate('remind_at', $selectedDate->format('Y-m-d'))
            ->orderBy('remind_at', 'asc')
            ->get();

        // retorna a view do dashboard
        return view('app.dashboard', compact('reminders', 'searchDate'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // exibe a view do dashboard
    public function index()
    {
        return view('app.dashboard');
    }
}

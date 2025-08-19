<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('app.register');
    }

    public function store(Request $request)
    {

    }

}

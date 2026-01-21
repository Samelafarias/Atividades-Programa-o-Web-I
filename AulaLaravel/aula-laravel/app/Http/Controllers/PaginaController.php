<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa()
    {
        return view('empresa');
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portifolio()
    {
        return view('portifolio');
    }

    public function equipe()
    {
        return view('equipe');
    }
}






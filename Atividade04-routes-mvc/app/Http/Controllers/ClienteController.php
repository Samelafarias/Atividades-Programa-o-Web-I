<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
    $clientes = ['Ana', 'Bruno', 'Carlos', 'Daniel'];
    return view('app.clientes', compact('clientes'));
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa()
    {
        return view('empresa');
    }

    public function sobre()
    {
        return view('pagina.sobre');
    }

        public function contato()
    {
        return view('contato');
    }

    public function usuario($id) 
    {
        return "Exibindo o perfil do usuário: " . $id;
    }


}






<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        return view('confirmacion', [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);
    }
}

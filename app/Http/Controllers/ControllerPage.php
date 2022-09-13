<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    public function formulario($codigo=null){
        if($codigo == 1234){
            $name = 'Alondra';
            $email = 'alondra.almazan9929@alumnos.udg.mx';
        }
        else{
            $name = null;
            $email = null;
        }
        return view('paginas.contacto', compact('name', 'email'));
    }

    public function recibeFormContacto(Request $request)
    {
        dd($request->validate([
            'name' => ['required','min:3','max:40'],
            'email' => ['required','email'],
            'message' => ['required','min:1','max:255']
        ]));
        dd($request->all());
    }

}

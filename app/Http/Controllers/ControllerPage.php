<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ControllerPage extends Controller
{
    public function formulario($codigo=null){
        if($codigo == 1234){
            $nombre = 'Alondra';
            $correo = 'alondra@test.com';
        }
        else{
            $nombre = null;
            $correo = null;
        }
        return view('paginas.contacto', compact('nombre', 'correo'));
    }

    public function recibeFormContacto(Request $request)
    {
         $request->validate([
             'nombre' => 'required|max:40',
             'correo' => 'required',
             'mensaje' => 'required|min:5|max:255',
         ]);
         
        //dd($request->all());

        // dd(
        //     $request->all(), //Toda la informacion
        //     $request->only('name','correo'), //De todos los datos solo los que esten en los parametros
        //     $request->except('_token'), //Todos los datos excepto el que este en el parametro
        //     $request->name, //Expecificamente cual dato
        //     $request->input('name') //Esto hace lo mismo que el de arriba
        // );

      // DB::table('contactos')->insert($request->except('_token')); //Esto equivale a lo de abajo con menos lineas

      //  DB::table('contactos')->insert([
      //      'name' => $request->name,
      //      'email' => $request->email,
      //      'message' => $request->message
      //  ]);
      
    //Nombre de la base de datos = Nombre de name del formulario
    //   $contacto = new Contacto();
    //   $contacto->name = $request->name;
    //   $contacto->email = $request->email;
    //   $contacto->message = $request->message;
    //   $contacto->save();

    //   Contacto::create([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'message' => $request->message
    //   ]);

      Contacto::create($request->all());

      return redirect('/contacto');
    }

}

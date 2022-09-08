<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{codigo?}', function($codigo=null) {
    if($codigo == 1234){
        $nombre = 'Alondra';
        $correo = 'alondra.almazan9929@alumnos.udg.mx';
    }
    else{
        $nombre = null;
        $correo = null;
    }
    return view('paginas.contacto');
});

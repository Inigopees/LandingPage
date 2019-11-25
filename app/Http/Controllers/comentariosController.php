<?php

namespace App\Http\Controllers;
use App\Mensajes;

class comentariosController extends Controller
{
    function insertarComentario(requests $request)
    {
        $mensaje = new Mensajes;
            $mensaje->name = $request->input('Nombre');
            $mensaje->email = $request->input('Email');
            $mensaje->comentario = $request->input('Comentario');
        $mensaje->save();
        return view('welcome');
    }
}

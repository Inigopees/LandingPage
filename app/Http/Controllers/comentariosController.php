<?php

namespace App\Http\Controllers;
use App\Mensajes;
use Illuminate\Http\Request;

class comentariosController extends Controller
{
    function insertarComentario(request $request)
    {
        $mensaje = new Mensajes;
            $mensaje->nombre = $request->input('Nombre');
            $mensaje->email = $request->input('Email');
            $mensaje->comentario = $request->input('Comentario');
        $mensaje->save();
        return view('welcome');
    }
}

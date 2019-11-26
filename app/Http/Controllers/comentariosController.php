<?php

namespace App\Http\Controllers;
use App\Mensajes;
use Illuminate\Http\Request;
use App\Http\Requests\ComentarioRequest;

class comentariosController extends Controller
{
    function insertarComentario(ComentarioRequest $request)
    {
        $mensaje = new Mensajes;
            $mensaje->nombre = $request->input('Nombre');
            $mensaje->email = $request->input('Email');
            $mensaje->comentario = $request->input('Comentario');
        $mensaje->save();
        return view('welcome');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicacionController extends Controller
{
    public function primeruni($id){
        $publicacion = publicacion::find(1);
        $titulo = $publicacion->titulo;
        $titulo = $publicacion->contenido;

        return view('primera unidad',['Titulo' => $titulo, 'Contenido'=>$contenido ]);
    }

    public function temasunidad1($id)
    {
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('primerunidad',['Titulo' =>$titulo, 'contenido' =>$contenido]);
    }

    public function segundauni($id)
    {
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('segundaunidad',['Titulo' =>$titulo, 'contenido' =>$contenido]);
    }

    public function temasunidad2($id)
    {
        $publicacion = Publicacion::find(1);
        $titulo = $publicacion->titulo;
        $contenido = $publicacion->contenido;

        return view('segundaunidad',['Titulo' =>$titulo, 'contenido' =>$contenido]);
    }
}

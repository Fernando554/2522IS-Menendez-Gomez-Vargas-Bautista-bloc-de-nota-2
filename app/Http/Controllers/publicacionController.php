<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class publicacionController extends Controller
{
   public function index()
   {
       return view('index');
   }

   public function unidad1()
   {
    $publicacion = Publicacion::find(1);
       $Nombre = $publicacion->nombre;
       $Titular = $publicacion->titular;
       $contenido = $publicacion->contenido;

       return view('unidad1',['Nombre' => $Nombre, 'Titular' => $Titular, 'Contenido' => $contenido]);
   }

   public function T_unidad1($id)
   {
    $publicacion = Publicacion::find($id);
       $Nombre = $publicacion->nombre;
       $Titular = $publicacion->titular;
       $contenido = $publicacion->contenido;

       return view('unidad1',['Nombre' => $Nombre, 'Titular' => $Titular, 'Contenido' => $contenido]);
   }

   public function unidad2()
   {
    $publicacion = Publicacion::find(10);
       $Nombre = $publicacion->nombre;
       $Titular = $publicacion->titular;
       $contenido = $publicacion->contenido;

       return view('unidad2',['Nombre' => $Nombre, 'Titular' => $Titular, 'Contenido' => $contenido]);

   }

   public function T_unidad2($id)
   {
    $publicacion = Publicacion::find($id);
    $Nombre = $publicacion->nombre;
    $Titular = $publicacion->titular;
    $contenido = $publicacion->contenido;

    return view('unidad2',['Nombre' => $Nombre, 'Titular' => $Titular, 'Contenido' => $contenido]);
   }
}

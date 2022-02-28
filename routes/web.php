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
    return view('index');
})->name('inicio');

Route::get('/apunte1', function () {
    return view('pages.sistemas de informacion');
})->name('apunte1');

Route::get('/apunte2', function () {
    return view('pages.Evolucion sistemas de informacion');
})->name('apunte2');

Route::get('/prueba', function () {
    return view('prueba');
})->name('prueba');

Route::get('/apunte3', function () {
    return view('pages.cliente servidor');
})->name('apunte3');

Route::get('/apunte4', function () {
    return view('pages.sistemas de computadoras centrales');
})->name('apunte4');

Route::get('/apunte5', function () {
    return view('pages.arquitectura cliente servidor');
})->name('apunte5');

Route::get('/apunte6', function () {
    return view('pages.protocolos comunicacion');
})->name('apunte6');

Route::get('/apunte7', function () {
    return view('pages.clasificar sistemas de informacion');
})->name('apunte7');

Route::get('/apunte8', function () {
    return view('pages.proceso diagramas de componentes');
})->name('apunte8');

//unidad 1 parte 2
Route::get('/apunte9', function () {
    return view('unidad1 parte 2.componentes del modelo cliente-servidor');
})->name('apunte9');

Route::get('/apunte10', function () {
    return view('unidad1 parte 2.programa maestro');
})->name('apunte10');

Route::get('/apunte11', function () {
    return view('unidad1 parte 2.procesos y tareas del programa maestro');
})->name('apunte11');

Route::get('/apunte12', function () {
    return view('unidad1 parte 2.caracteristicas de la arquitectura cliente servidor');
})->name('apunte12');

Route::get('/apunte13', function () {
    return view('unidad1 parte 2.cliente servidor ventajas.desventajas');
})->name('apunte13');

Route::get('/apunte14', function () {
    return view('unidad1 parte 2.computo en la nube');
})->name('apunte14');

Route::get('/apunte15', function () {
    return view('unidad1 parte 2.definir IAAS PAAS y SAAS');
})->name('apunte15');

Route::get('/apunte16', function () {
    return view('unidad1 parte 2.componentes del modelo cliente-servidor');
})->name('apunte16');

Route::get('/apunte17', function () {
    return view('unidad1 parte 2.tipos de servidores');
})->name('apunte17');




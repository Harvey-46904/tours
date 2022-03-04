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

//VISTAS PAGINA WEB

//MODELO BASE WEB

//vista base
Route::get('index', function () {
    return view('website.index');
})->name("index");

Route::get('login', function () {
    return view('website.login');
})->name("login");


//VISTAS DASHBOARD
Route::get('dashboard-index', function () {
    return view('dash.dashboard');
})->name("index-dash");

Route::get('registro-tour', function () {
    return view('dash.registro-tour');
})->name("registro-tour");

Route::get('modificar-tour', function () {
    return view('dash.modificar-tour');
})->name("modificar-tour");

Route::get('lista-tours', function () {
    return view('dash.lista-tours');
})->name("lista-tours");

Route::get('agregar-publicidad', function () {
    return view('dash.agregar-publicidad');
})->name("agregar-publicidad");

Route::get('modificar-publicidad', function () {
    return view('dash.modificar-publicidad');
})->name("modificar-publicidad");

Route::get('listar-publicidad', function () {
    return view('dash.listar-publicidad');
})->name("listar-publicidad");

Route::get('agregar-imagenes', function () {
    return view('dash.agregar-imagenes');
})->name("agregar-imagenes");

Route::get('listar-imagenes', function () {
    return view('dash.listar-imagenes');
})->name("listar-imagenes");

Route::get('modificar-imagenes', function () {
    return view('dash.modificar-imagenes');
})->name("modificar-imagenes");
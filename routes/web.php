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
//funcion anonima
//callback
Route::get('variables' , function(){
    //definir una variable
    //en php
    $mensaje = 20;
    //funcion var_dump
    //sirve para analizar una variable
    //muestra un tipo de dato y valor 
    print_r($mensaje);
    echo "<hr />";
    $mensaje = "David Mendieta";
    var_dump($mensaje);
    


});

Route::get('arreglos' , function(){
    //Arreglo: es una estructura de datos
    $estudiantes = [ 'AN'=>"Ana" , 
                     'MA'=>"Maria" , 
                     'JO'=>"Jorge" ];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});
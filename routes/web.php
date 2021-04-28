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

Route::get('paises', function(){

    $paises= ["Colombia" => [
                                "capital" => "Bogotá",
                                "moneda" => "Peso",
                                "poblacion" => 51
                            ], 
              "Peru" => [
                                "capital" => "Lima",
                                "moneda" => "Sol",
                                "poblacion" => 32.8
                        ], 
              "Paraguay" => [
                                "capital" => "Asunción",
                                "moneda" => "Guaraní",
                                "poblacion" => 7.3
                            ]
            ];


    foreach($paises as $nombre => $pais){
    echo "<pre>";
    echo "<h1>$nombre</h1>";
    print_r($pais ["capital"] . "<br />");
    print_r($pais ["moneda"]  . "<br />");
    print_r($pais ["poblacion"] . "<br />");
    echo "</pre>";
    echo "<hr />";

    }

    $suma = 0;
    foreach($paises as $nombre => $pais){
        $suma+= $pais["poblacion"];
    }

    echo "La suma de los paises es $suma";
    


});
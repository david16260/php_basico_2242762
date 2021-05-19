<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use PhpParser\Node\Stmt\Switch_;

class MetabuscadorController extends Controller
{
    public function formulario_buscador()
    {
        //mostrar formulario del metabuscador
        return view('metabuscador');
    }
    //servidor
    public function buscar()
    {
        //1. almacenar los datos trasnmitidos en respectivos variables
        $termino = $_POST["termino"];
        $motores = $_POST["motores"];
        //2. determinar cual motor de busqueda fue elegido 
        switch ($motores) {
            case 1: //Debe redireccionar a la direccion de google busqueda
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;

            case 3:
                return redirect()->to("https://duckduckgo.com/?q=$termino");

            case 4:
                return redirect()->to("http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
            case 5:
                return redirect()->to("https://www.dogpile.com/serp?q=$termino");

            case 6:
                return redirect()->to("https://yandex.com/search/?text=$termino");

            case 7:
                return redirect()->to("https://es.ask.com/web?q=$termino");

            case 8:
                return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");

            case 9:
                return redirect()->to("https://www.ecosia.org/search?q=$termino");

            case 10:
                return redirect()->to("https://www.bing.com/search?q=$termino");
        }

        //print_r($_POST);

    }
}

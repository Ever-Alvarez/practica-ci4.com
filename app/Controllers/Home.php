<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //*Esto es posible con las rutas app\Config\Routes
        //return view('welcome_message');
        //* return "prueba";
        $data = [
            'titulo' => 'Inicio'
        ];
        //*Tambien puedes retornar mensajes o impresiones
        return view('/plantillas/header', $data)
        .view('index', $data)
        .view('/plantillas/footer', ['copy' => '3-11-2023 00:40']);;
    }
}
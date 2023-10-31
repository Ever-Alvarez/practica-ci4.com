<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //*Esto es posible con las rutas app\Config\Routes
        //return view('welcome_message');
        //* return "prueba";

        //*Tambien puedes retornar mensajes o impresiones

        return view('index');
    }
}
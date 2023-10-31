<?php

namespace App\Controllers;

class Productos extends BaseController {

    //*Para que la funcion pueda encontrarse en el navegador necesitamos definir la ruta de la funcion

    public function index() {
        //?echo"<pre>";
        //?print_r($this->session);
        //?echo"<pre>";
        return view('/productos/index');
    }

    public function detallesProductos() {
        return view('/productos/detallesProductos');
    }
}

?>
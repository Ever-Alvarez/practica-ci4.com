<?php

namespace App\Controllers;

class Productos extends BaseController {

    //*Para que la funcion pueda encontrarse en el navegador necesitamos definir la ruta de la funcion

    //*Por ahora vamos a pasar datos estaticos, mas adelante lo haremos con BD.

    public function index() {

        //* Para poder enviar la información necesitamos un arreglo

        $data = [
            'titulo' => 'Productos',
        ];

        return view('/productos/index', $data);
    }

    public function detallesProductos() {
        return view('/productos/detallesProductos');
    }

    public function catalogo($categoria ,$id) {
        return "Categoria: $categoria <br> id producto: $id";
    }
}

?>
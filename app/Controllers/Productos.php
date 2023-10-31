<?php

namespace App\Controllers;

class Productos extends BaseController {

    //*Para que la funcion pueda encontrarse en el navegador necesitamos definir la ruta de la funcion

    //*Por ahora vamos a pasar datos estaticosm, mas adelante lo haremos con BD.

    public function index() {

        //* Para poder enviar la información necesitamos un arreglo

        $data = [
            'titulo' => 'Catalogo de Productos',
        ];

        return view('/productos/index');
    }

    public function detallesProductos() {
        return view('/productos/detallesProductos');
    }

    public function catalogo($categoria ,$id) {
        return "Categoria: $categoria <br> id producto: $id";
    }
}

?>
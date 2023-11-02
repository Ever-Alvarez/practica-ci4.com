<?php

namespace App\Controllers;

class Productos extends BaseController {

    //*Para que la funcion pueda encontrarse en el navegador necesitamos definir la ruta de la funcion

    //*Por ahora vamos a pasar datos estaticos, mas adelante lo haremos con BD.

    public function index() {

        //* Para poder enviar la información necesitamos un arreglo

        $data = [
            'titulo' => 'Productos',
            'copy' => '12-11-2023 5:00 pm'
        ];

        return view('/plantillas/header', $data)
        .view('/productos/index', $data)
        .view('/plantillas/footer');
    }

    public function detallesProductos() {

        $data = [
            'titulo' => 'Detalles del Productos',
            'copy' => '12-11-2023 5:05 pm',
        ];

        return view('/plantillas/header', $data)
        .view('/productos/detallesProductos', $data)
        .view('/plantillas/footer', $data);

    }

    public function catalogo($categoria ,$id) {

        $data = [
            'titulo' => 'Productos',
        ];

        echo view('/plantillas/header', $data);
        return "Categoria: $categoria <br> id producto: $id";
        echo ('/plantillas/footer');
    }
}

?>
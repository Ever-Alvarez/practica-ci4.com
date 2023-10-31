<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//*La ruta raíz lleva al controlador a la funcion 'index' del controlador 'Home'
            //*Controller
$routes->get('/', 'Home::index');
    //*Ruta Raíz          Function

$routes->get('/productos', 'Productos::index');
$routes->get('/productos/detallesProductos', 'Productos::detallesProductos');

//*Ruta con parametro, la funcion se cambia por el tipo de dato del parametro

//*Podemos pedirle mas parametros
$routes->get('/productos/(:alpha)/(:num)', 'Productos::catalogo/$1/$2');
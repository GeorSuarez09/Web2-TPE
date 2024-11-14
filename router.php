<?php
require_once './controller/viaje.controller.php';
require_once './controller/categoria.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'inicio';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

// Parseo la acción para separar acción real de parámetros
$params = explode('/', $action);

switch ($params[0]) {
    case 'listarViajes':
        // Se crea una instancia del controlador antes de llamar al método
        $controller = new viajeController();
        $controller->mostrarViajes();
        break;
        
    case 'verMasViajes':
        // Se asegura de que el controlador esté instanciado
        $controller = new viajeController();
        $controller->mostrarViaje($params[1]); // $params[1] es el ID del viaje
        break;

    case 'formularioViajes':
        $controller = new viajeController();
        $controller->mostrarformViajes();
        break;

    case 'agregar':
        $controller = new viajeController();
        $controller->addViaje();
        break;

    case 'delete':
        $controller = new viajeController(); 
        $controller->eliminarViaje($params[1]);
        break;

    case 'editarViaje':
        $controller = new viajeController();
        $controller->mostrarformEditViaje($params[1]);
        break;

    case 'update':
        $controller = new viajeController();
        $controller->updateViajes($params[1]);
        break;


    //----------------------------------------------------------------------------------------
    case 'mostrarCategoria':
        $controller = new categoriaController();
        $controller->mostrarCategorias();
        break;
    case 'eliminarCategoria':
        $controller = new categoriaController(); 
        $controller->borrarCategoria($params[1]);
        break;
    case 'formularioCategoria':
        $controller = new categoriaController();
        $controller->mostrarformCategorias();
        break;
    case 'agregarCategoria':
        $controller = new categoriaController();
         $controller->agregarCategoria();
        break;
    case 'mostrarFormEditCategoria':
        $controller = new categoriaController();
        $controller->mostrarFormEditCategoria($params[1]);
        break;
    case 'editarCategoria':
        $controller = new categoriaController();
        $controller->modificarCategoria($params[1]);
        break;
    default:
        // Manejar caso por defecto
        break;
}
    

?>
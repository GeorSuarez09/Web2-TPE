<?php
 require_once './controller/viaje.controller.php';
 

 define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

 $action = 'listar';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

//Parsea la accion para separar accion real de parametros
$params = explode ('/' , $action);

switch($params[0]) {
    case 'listar':
        $controller = new viajeController;
        $controller->listarViaje();
        break;
 /*   case 'agregar':
        $controller = new viajeController;
        $controller->addViaje();
        break;
    case 'eliminar':
        $controller = new viajeController;
        $id = $params[1];
        $controller->eliminarViaje($id);
        break;
    case 'editar':
        $controller = new viajeController;
        $id = $params[1];
        $controller->editarViaje($id);
        break;
    case 'update':
        $controller = new viajeController;
        $controller->updateViaje();
        break;*/

    // Rutas para categorías
   /* case 'categorias':
        $controller = new CategoriaController();
        $controller->listarCategorias(); // Método para listar categorías
        break;
    case 'agregar_categoria':
        $controller = new CategoriaController();
        $controller->agregarCategoria(); // Método para agregar categoría
        break;
    case 'eliminar_categoria':
        $controller = new CategoriaController();
        $id = $params[1]; // ID de la categoría a eliminar
        $controller->eliminarCategoria($id); // Método para eliminar categoría
        break;
    case 'editar_categoria':
        $controller = new CategoriaController();
        $id = $params[1]; // ID de la categoría a editar
        $controller->editarCategoria($id); // Método para editar categoría
        break;
    case 'update_categoria':
        $controller = new CategoriaController();
        $controller->updateCategoria(); // Método para actualizar categoría
        break;*/

    default:
        // Manejar caso por defecto
        break;
}
    

?>
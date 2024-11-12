<?php
 require_once './controller/viaje.controller.php';
 require_once './controller/categoria.controller.php';
 require_once 'config.php';
 

 define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

 $action = 'inicio';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

//Parsea la accion para separar accion real de parametros
$params = explode ('/' , $action);

switch ($params[0]) {
   /* case 'inicio':
        $controller = new viajeController();
        $controller->mostrarInicio();
        break;*/    
     //--------------------------------------------------------------------------------------
     case 'listarViajes':
        $controller = new viajeController();
        $controller->mostrarViajes();
        break;
   /* case 'verMasViajes':
            $controllerViajes->mostrarViaje($params[1]);
        break;*/
   /* case 'editar':
        $controller = new viajeController;
        $id = $params[1];
        $controller->editarViaje($id);
        break;
    case 'update':
        $controller = new viajeController;
        $controller->updateViaje();
        break;*/

    // Rutas para categorías
   /* case 'listarCategorias':
        $controller = new CategoriaController();
        $controller->mostraCategoria(); // Método para listar categorías
        break;
        case 'formulario':
            $controller = new CategoriaController(); // Asegúrate de instanciar el controlador
            $controller->formCategorias();
            break;
    case 'agregar_categoria':
        $controller = new CategoriaController();
        $controller->agregarCategoria(); // Método para agregar categoría
        break;
    /*case 'eliminar_categoria':
        $controller = new CategoriaController();
        $id = $params[1]; // ID de la categoría a eliminar
        $controller->eliminarCategoria($id); // Método para eliminar categoría
        break;
    case 'update_categoria':
        $controller = new CategoriaController();
        $controller->formEditarCategoria($id, $categoria); // Método para actualizar categoría
        break;*/

    default:
        // Manejar caso por defecto
        break;
}
    

?>
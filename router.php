<?php
<<<<<<< HEAD
 require_once './controller/viaje.controller.php';
 require_once './controller/categoria.controller.php';
 require_once 'config.php';
 
=======
require_once './controller/viaje.controller.php';
require_once './controller/categoria.controller.php';
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

<<<<<<< HEAD
 $action = 'inicio';
=======
$action = 'inicio';
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

// Parseo la acción para separar acción real de parámetros
$params = explode('/', $action);

switch ($params[0]) {
<<<<<<< HEAD
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
=======
    case 'listarViajes':
        // Se crea una instancia del controlador antes de llamar al método
        $controller = new viajeController();
        $controller->mostrarViajes();
        break;
        
    case 'verMasViajes':
        // Se asegura de que el controlador esté instanciado
        $controller = new viajeController();
        $controller->mostrarViaje($params[1]); // $params[1] es el ID del viaje
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
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

<<<<<<< HEAD
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
=======
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5

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
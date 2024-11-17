<?php
require_once './libs/response.php';
require_once './middlewares/readSession.php';
require_once './middlewares/veryfyAuth.php';
require_once './controller/viaje.controller.php';
require_once './controller/categoria.controller.php';
require_once './controller/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$res = new Response();

$action = 'listarViajes';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

// Parseo la acción para separar acción real de parámetros
$params = explode('/', $action);


/*
listarViajes -->         viajeController() -> mostrarViajes()
verMasViajes/:ID -->     viajeController() -> mostrarViaje($params[1])
formularioViajes -->     viajeController() -> mostrarformViajes()
delete/:ID -->           viajeController() -> eliminarViaje($params[1])
editarViaje/:ID -->      viajeController() ->mostrarFormEditViaje($params[1])
update/:ID -->           viajeController() -> updateViajes($params[1])

mostrarCategoria -->           categoriaController() ->mostrarCategorias()
eliminarCategoria/:ID -->      categoriaController() -> borrarCategoria($params[1])
formularioCategoria -->        categoriaController() -> mostrarformCategorias()
agregarCategoria -->           categoriaController() -> agregarCategoria()
mostrarFomEditCategoria/:ID--> categoriaController() -> mostrarFormEditCategoria($params[1])
editarCategoria/:ID -->        categoriaController() -> modificarCategoria($params[1])

*/

switch ($params[0]) {
    case 'listarViajes':
        sessionAuthMiddleware($res);
        $controller = new viajeController($res);
        $controller->mostrarViajes();
        break;
    case 'verMasViajes':
        $controller = new viajeController();
        $controller->mostrarViaje($params[1]);
        break;
    case 'formularioViajes':
        $controller = new viajeController();
        $controller->mostrarformViajes();
        break;
    case 'agregar':
        sessionAuthMiddleware($res);
        verifyAuthMiddleware($res);
        $controller = new viajeController($res);
        $controller->addViaje();
        break;
    case 'eliminar':
        sessionAuthMiddleware($res);
        verifyAuthMiddleware($res);
        $controller = new viajeController($res); 
        $controller->eliminarViaje($params[1]);
        break;
    case 'editarViaje':
        sessionAuthMiddleware($res);
        verifyAuthMiddleware($res);
        $controller = new viajeController($res);
        $controller->mostrarformEditViaje($params[1]);
        break;
    case 'update':
        $controller = new viajeController();
        $controller->updateViajes($params[1]);
        break;

     //----------------------------------------------------------------------------------------
    case 'showLogin':
        $controller = new AuthController($res);
        $controller->showLogin();
        break;
    case 'login':
        $controller = new AuthController($res);
        $controller->login();
        break;
    case 'logout':
        $controller = new AuthController($res);
        $controller->logout();
        break;

    //----------------------------------------------------------------------------------------
    case 'mostrarCategoria':
        $controller = new categoriaController();
        $controller->mostrarCategorias();
        break;
     case 'verMasCategoria':
            $controller = new categoriaController();
            $controller->mostrarCategoria($params[1]);
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
          echo "La pagina que busca no esta disponible";
            break;
        }
    

?>
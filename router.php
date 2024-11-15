<?php
require_once 'app/libs/response.php';
require_once 'app/middlewares/readSession.php';
require_once 'app/middlewares/veryfyAuth.php';
require_once './controller/viaje.controller.php';
require_once './controller/categoria.controller.php';
require_once 'app/controllers/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
$res = new Response();

$action = 'inicio';
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

viajePorCategoria/:ID -->          viajeController() -> verViajeXCategoria($params[1])
*/

switch ($params[0]) {
    case 'listarViajes':
        sessionAuthMiddleware($res);
        $controller = new viajeController($res);
        $controller->mostrarViajes();
        break;
        
    case 'verMasViajes':
        $controller = new viajeController();
        $controller->mostrarViaje($params[1]); // $params[1] es el ID del viaje
        break;

    case 'formularioViajes':
        $controller = new viajeController();
        $controller->mostrarformViajes();
        break;

    case 'agregar':
        sessionAuthMiddleware($res); // veirifica que el usuario este logueado y setea $res->user, o redirige a login
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
    case 'showLogin':
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
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

        
        case 'viajePorCategoria':
            $controller = new viajeController();
            $controller->verViajeXCategoria($params[1]);
           break;
        default:
          echo "La pagina que busca no esta disponible";
            break;
        }
    

?>
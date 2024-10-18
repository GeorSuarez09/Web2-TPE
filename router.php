<?php
 require_once 'controller/viaje.controller.php';

 define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

 $action = 'listar';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

//Parsea la accion para separar accion real de parametros
$params = explode ('/' , $action);

switch($params[0]){
    case 'listar':
        $controller = new viajeController;
        $controller->   listarViaje();
        break;
    case 'agregar':
        
    }
?>
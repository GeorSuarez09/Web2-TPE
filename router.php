<?php
 require_once "app/viaje.controller";

 define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

 $action = 'listar';
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

?>
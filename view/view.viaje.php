<?php

class ViajeView {
    function ShowHome(){
        require_once './templates/header.phtml';
        require_once './templates/inicio.phtml';
        require_once './templates/footer.phtml';
    }
    function ShowViaje($viajes) {
<<<<<<< HEAD
        require_once "templates/viaje/formulario.phtml";  //  cargamos la lista de viajes
=======
        require_once "templates/viaje/formlistar.php";  //  cargamos la lista de viajes
>>>>>>> 3681eacee5bda2e84cd58bd18b4c53e72f4a2aab
    }

    function Error($msg) {
        echo "<h1>ERROR</h1>";
        echo "<h2>$msg</h2>";
    }

    function showEditarViaje($viaje) {
        require_once "templates/viaje/formeditar.phtml";  //  cargamos el formulario de edición
    }

    function showEliminarViaje($viaje) {
        require_once "templates/viaje/formdelete.phtml";  //  cargamos el formulario de eliminación
    }
}
?>
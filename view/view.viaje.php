<?php

class ViajeView {
    function ShowViaje($viajes) {
        require_once "templates/viaje/formulario.phtml";  //  cargamos la lista de viajes
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
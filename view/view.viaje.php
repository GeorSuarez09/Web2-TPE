<?php

class ViajeView {


    function mostrarFormulario() {
        require_once 'templates/header.phtml'; // Incluye el encabezado
        require_once 'templates/formulario.phtml'; // Incluye el formulario
        require_once 'templates/footer.phtml'; // Incluye el pie de página
    }
    function mostrarViaje($viajes) {
        if (empty($viajes)) {
            echo "<p>No hay viajes disponibles.</p>";
        } else {
            require_once 'templates/viaje/formlistar.phtml';  // Use the appropriate template
        }
    }
    public function viajeDetalles ($viaje, $categoria) {
        require_once 'templates/viajes/detalles.viaje.phtml';

    }
    function mostrarErrores($errores) {
        require_once './templates/errores.phtml'; // Asegúrate de incluir el encabezado
    
    }
/*
    function showEditarViaje($viajes) {
        require_once './templates/viaje/formeditar.phtml';  //  cargamos el formulario de edición
    }

    function showEliminarViaje($viajes) {
        require_once './templates/viaje/formdelete.phtml';  //  cargamos el formulario de eliminación
    }*/
 }
?>
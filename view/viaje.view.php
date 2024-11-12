<?php

class ViajeView {


    public function showViaje($viajes){
        require_once './templates/viaje/formlistar.phtml';
    }   
    public function viajeDetalles($viaje, $categoria){
        require_once './templates/viaje/detalle.phtml';
    }
    public function mostrarformViajes($categoria){
      require_once './templates/viaje/formulario.phtml';
    }
    function showEditarViaje($viajes) {
        require_once './templates/viaje/formeditar.phtml';  //  cargamos el formulario de edición
    }
   
    function showEliminarViaje($viajes) {
        require_once './templates/viaje/formdelete.phtml';  //  cargamos el formulario de eliminación
    }
    function mostrarErrores($errores) {
        require_once './templates/viaje/errores.phtml'; // Asegúrate de incluir el encabezado
    
    }
 }
?>
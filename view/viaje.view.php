<?php

class ViajeView {


    public function showViaje($viajes) {
        require_once './templates/viaje/formlistar.phtml';
    }
    public function viajeDetalles($viaje, $categoria){
        require_once './templates/viaje/detalle.phtml';
    }
    public function mostrarformViajes($categoria){
  require_once './templates/viaje/formulario.phtml';
    }
    public function formEditViaje($ID_viaje, $viaje, $categoria, $categorias){
        require_once './templates/viaje/formeditar.phtml';
    }
    function mostrarErrores($errores) {
        require_once './templates/viaje/errores.phtml'; // Asegúrate de incluir el encabezadp
    }
    public function mostrarViajeXCategoria($viajes, $categoria){
        require_once 'templates/viaje/tabla.viaje.phtml';
    }
 }
?>
<?php

class ViajeView {


<<<<<<< HEAD
    public function showViaje($viajes){
        require_once './templates/viaje/formlistar.phtml';
    }   
=======
    public function showViaje($viajes) {
        require_once './templates/viaje/formlistar.phtml';
    }
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
    public function viajeDetalles($viaje, $categoria){
        require_once './templates/viaje/detalle.phtml';
    }
    public function mostrarformViajes($categoria){
      require_once './templates/viaje/formulario.phtml';
    }
<<<<<<< HEAD
    function showEditarViaje($viajes) {
        require_once './templates/viaje/formeditar.phtml';  //  cargamos el formulario de edición
    }
   
=======
    public function formEditViaje($ID_viaje, $viaje, $categoria, $categorias){
        require_once './templates/viaje/formeditar.phtml';
    }
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
    function showEliminarViaje($viajes) {
        require_once './templates/viaje/formdelete.phtml';  //  cargamos el formulario de eliminación
    }
    function mostrarErrores($errores) {
        require_once './templates/viaje/errores.phtml'; // Asegúrate de incluir el encabezado
<<<<<<< HEAD
    
=======
    }
    public function mostrarViajeXCategoria($viajes, $categoria){
<<<<<<< HEAD
        require_once 'templates/viaje/tabla.viaje.phtml';
=======
        require_once 'templates/viajes/tabla.viaje.phtml';
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
>>>>>>> 56119f20b576c075694477b3a76e677c19b894fb
    }
 }
?>
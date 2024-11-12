<?php

class CategoriaView {
    public function mostrarCategoria($categorias) {
        $constante = count($categorias);
        require_once "templates/categoria/categorialistar.phtml";
    }
    //ME FALTA DETALLE 
    public function formCategoria($categoria){
        require_once "./templates/categoria/categoria.phtml";
    }
    public function formEditarCategoria($categoria) {
        require_once "./templates/categoria/formeditar.phtml";
    }

   
    function mostrarErrores($errores) {
        require_once './templates/errores.phtml'; // Asegúrate de incluir el encabezado
    
    }
}
?>
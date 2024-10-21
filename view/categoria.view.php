<?php

class CategoriaView {
    public function mostrarCategoria($categorias) {
        require_once "templates/categoria/categorialistar.phtml";
    }

    public function showEditarCategoria($categoria) {
        require_once "templates/categoria/formeditar.phtml";
    }

    public function showEliminarCategoria($categoria) {
        require_once "templates/categoria/formdelete.phtml";
    }
    function mostrarErrores($errores) {
        require_once './templates/errores.phtml'; // Asegúrate de incluir el encabezado
    
    }
}
?>
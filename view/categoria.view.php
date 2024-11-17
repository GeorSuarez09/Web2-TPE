<?php
class categoriaView{
    // mostrar DB
    public function mostrarCategoria($categorias){
        // traigo el PHTL del listado;
        require_once './templates/categoria/listacategoria.phtml';
    }
    public function listadoCategoria($categoria) {
        require_once './templates/categoria/detalleCategoria.phtml';

    }
    public function mostrarformCategoria(){
        require_once './templates/categoria/formularioC.phtml';
    }
    public function mostrarformEditCategoria($ID_categoria, $categoria){
        require_once './templates/categoria/modificarC.phtml';
    }
    // mostrar errores
    public function mostrarErrores($errores){
        require_once './templates/categoria/errores.phtml';
    }
}
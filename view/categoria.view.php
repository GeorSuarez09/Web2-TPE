<?php
class categoriaView{
    // mostrar DB
    public function mostrarCategoria($categoria){
        // traigo el PHTL del listado;
        require_once 'templates/categoria/listacategoria.phtml';
    }
    public function listadoCategoria($categoria) {
        require_once 'templatesviaje/detalle.phtml';

<<<<<<< HEAD
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
    
=======
    }
    public function mostrarformCategoria(){
        require_once 'templates/categoria/formularioC.phtml';
    }
    public function mostrarformEditCategoria($ID_categoria, $categoria){
        require_once 'templates/categoria/modificarC.phtml';
    }
    // mostrar errores
    public function mostrarErrores($errores){
        require_once 'templates/categoria/errores.phtml';
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
    }
}
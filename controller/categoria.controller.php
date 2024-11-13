<?php
require_once 'view/categoria.view.php';
require_once 'model/categoria.model.php';

class categoriaController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new categoriaModel();
        $this->view = new categoriaView();
    }

    public function mostrarCategorias(){
        $categoria = $this->model->getCategorias();            
        if(!$categoria){
            return $this->view->mostrarErrores("No hay categoria disponibles");
        }
        return $this->view->mostrarCategoria($categoria);
    }

    public function mostrarPersona($ID_categoria){
        $categoria = $this->model->verCategoriaById($ID_categoria);        
        if(!$categoria){
            return $this->view->mostrarErrores("No se a encontrado la categoria con la id: $ID_categoria");
        }
        return $this->view->listadoCategoria($categoria);
    }
    public function formEditarCategoria($ID_categoria){
        $ID_categoria= $this->model->verCategoriaById($ID_categoria);
 }
    public function mostrarformCategorias(){
        //$viaje = $this->modelo->verViajes();
        $this->view->mostrarformCategoria();
    }

    public function agregarCategoria(){
         // Verifica si se ha enviado el formulario
    if (!isset($_POST['temporada']) || empty($_POST['temporada']) ||
    !isset($_POST['empresa']) || empty($_POST['empresa']) ||
    !isset($_POST['comodidad']) || empty($_POST['comodidad'])) {
    return $this->view->mostrarErrores('Falta completar todos los campos obligatorios');
}

// Asigna las variables correctamente
$temporada = $_POST['temporada'];
$empresa = $_POST['empresa'];
$comodidad = $_POST['comodidad'];

// Agrega el viaje a la base de datos
$this->model->agregarCategoria($temporada, $empresa, $comodidad);

// Redirige al listado de viajes
header('Location: ' . BASE_URL);
      }
    
    public function mostrarFormEditCategoria($ID_categoria){
        $categoria = $this->model->verCategoriaById($ID_categoria);

        if(!$categoria){
            return $this->view->mostrarErrores('La categoria que esta buscando no esta disponible');
        }
        $this->view->mostrarFormEditCategoria($ID_categoria, $categoria);
    }
      public function modificarCategoria($ID_categoria){
          // Verifica si se ha enviado el formulario
          if (!isset($_POST['temporada']) || empty($_POST['temporada']) ||
          !isset($_POST['empresa']) || empty($_POST['empresa']) ||
          !isset($_POST['comodidad']) || empty($_POST['comodidad'])) {
          return $this->view->mostrarErrores('Falta completar todos los campos obligatorios');
      }
      
                  // Asigna las variables correctamente
                  $temporada = $_POST['temporada'];
                  $empresa = $_POST['empresa'];
                  $comodidad = $_POST['comodidad'];
                
                  $this->model->editarCategoria($ID_categoria,$temporada, $empresa, $comodidad);
                  header('Location: ' . BASE_URL );
    
         }     
    public function borrarCategoria($ID_categoria){
        $categoria = $this->model->verCategoriaById($ID_categoria);
        if (!$categoria) {
            return $this->view->mostrarErrores("No existe la viaje con el id=$ID_categoria");
        }
        $this->model->borrarCategoria($ID_categoria);
        header('Location: ' . BASE_URL );
    }
}
 
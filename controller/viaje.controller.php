<?php 
 require_once 'model/viajes.model.php';
 require_once 'view/view.viaje.php';

 class viajeController {
  private $model;
  private $view;

  public function __construct() {
      $this->model = new ViajeModel();
      $this->view = new ViajeView();
  }
  function listarViaje(){
    //Obtiene los viajes del modelo 
   $viaje = $this-> model -> getViaje();

   // $this-> view -> getViaje($viaje);
  }

  function addViaje(){
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    
  }
}
?>
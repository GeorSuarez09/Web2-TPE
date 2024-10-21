<?php
require_once 'model/viajes.model.php';
require_once 'view/view.viaje.php';

class viajeController
{
  private $model;
  private $view;

  public function __construct()
  {
    $this->model = new ViajeModel();
    $this->view = new ViajeView();
  }
  function listarViaje() {
    $viaje = $this->model->getViaje();
    
  
    
    $this->view->ShowViaje($viaje);
}

 /* function addViaje()
  {
    $origen = $_POST['Origen'];
    $destino = $_POST['Destino'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];

    //Verifico campos obligatorios
    if (empty($origen) || empty($destino) || empty($fecha) || empty($hora)) {
     $this->view->Error('Faltan campos obligatorios');
    }

    //Inserto la tarea en la bd
    $this->model->agregarViaje($origen, $destino, $fecha, $hora);

    //Redirigimos al listado
    header("Location:" . BASE_URL);
  }

  function editarViaje($id) {
    // Obtiene el viaje que se quiere editar
    $viaje = $this->model->getViajeById($id);
  
    // Muestra la vista de edición
   $this->view->showEditarViaje($viaje);
}

function updateViaje() {
  $id = $_POST['id'];
  $origen = $_POST['Origen'];
  $destino = $_POST['Destino'];
  $fecha = $_POST['Fecha'];
  $hora = $_POST['Hora'];

  // Verifico campos obligatorios
  if (empty($origen) || empty($destino) || empty($fecha) || empty($hora)) {
      $this->view->Error('Faltan campos obligatorios');
      return;
  }

  // Actualiza el viaje en la BD
  $this->model->editarViaje($fecha, $hora, $origen, $destino, $id);
  header("Location:" . BASE_URL);
}

  function eliminarViaje($id){
      $this->model->deleteViaje($id);
      header('Location:' . BASE_URL);
  }*/
}
?>
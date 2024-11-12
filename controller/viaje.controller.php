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
  public function mostrarViajes(){
    $viaje = $this->model->getViaje();            
    if(!$viaje){
        return $this->view->mostrarErrores("No hay personas disponibles");
    }
    return $this->view->mostrarViaje($viaje);
}

public function mostrarViaje($id)
{
    $viaje = $this->model->getViajeById($id);

    if (!$viaje) {
        return $this->view->mostrarErrores("No se a encontrado el viaje con la id: $id");
    }
    $id = $viaje->ID_viaje;
    //$persona = $this->model->verPersona($id);
   // return $this->view->viajeDetalles($viaje, $categoria);
}
/*public function mostrarFormulario() {
  $this->view->mostrarFormulario(); // Llama a la vista para mostrar el formulario
}
public function addViaje() {
  // Verifica si se ha enviado el formulario
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Verifica que los campos obligatorios estén completos
      if (!isset($_POST['Origen']) || empty($_POST['Origen']) ||
          !isset($_POST['Destino']) || empty($_POST['Destino']) ||
          !isset($_POST['Fecha']) || empty($_POST['Fecha']) ||
          !isset($_POST['Hora']) || empty($_POST['Hora'])) {
          return $this->view->mostrarErrores('Falta completar todos los campos obligatorios');
      }

      // Asigna las variables correctamente
      $origen = $_POST['Origen'];
      $destino = $_POST['Destino'];
      $fecha = $_POST['Fecha'];
      $hora = $_POST['Hora'];

      // Agrega el viaje a la base de datos
      $this->model->agregarViaje($fecha, $hora, $origen, $destino);

      // Redirige al listado de viajes
      header('Location: ' . BASE_URL . 'listar');
      exit;
  }

  // Si no es POST, muestra el formulario
  $this->view->mostrarFormulario();
}*/


  /*function editarViaje($id) {
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
}*/

public function eliminarViaje($id){
  $viaje = $this->model->getViajeById($id);
  if (!$viaje) {
      return $this->view->mostrarErrores("No existe la viaje con el id=$id");
  }
  $this->model->deleteViaje($id);
  header('Location: ' . BASE_URL . 'listarViaje');
}
}
?>
<?php
require_once 'model/viaje.model.php';
require_once 'view/viaje.view.php';

class viajeController
{
  private $model;
  private $view;

  public function __construct()
  {
    $this->model = new ViajeModel();
    $this->view = new ViajeView();
  }
  public function mostrarViajes() {
    $viajes = $this->model->getViaje();  // Obtienes los viajes de la base de datos
   
    if (!$viajes) {
        return $this->view->mostrarErrores("No hay viajes disponibles");
    }

    // Pasa los viajes a la vista (a la plantilla 'formlistar.phtml')
    return $this->view->showViaje($viajes); 
}

public function mostrarViaje($ID_viaje)
{
    $viaje = $this->model->getViajeById($ID_viaje);

    if (!$viaje) {
        return $this->view->mostrarErrores("No se a encontrado el viaje con la id: $ID_viaje");
    }
    $ID_categoria = $viaje->id;
    $categoria = $this->model->verCategoriaById($ID_categoria);
   return $this->view->viajeDetalles($viaje, $categoria);
}

public function mostrarformViajes()
{
    $categoria = $this->model->getCategorias();
    $this->view->mostrarformViajes($categoria);
}
public function addViaje() {
    

    // Verifica si se ha enviado el formulario
    if (!isset($_POST['Fecha']) || empty($_POST['Fecha']) ||
        !isset($_POST['Hora']) || empty($_POST['Hora']) ||
        !isset($_POST['Origen']) || empty($_POST['Origen']) ||
        !isset($_POST['Destino']) || empty($_POST['Destino']) ||
        !isset($_POST['id_categoria']) || empty($_POST['id_categoria'])) {
        return $this->view->mostrarErrores('Falta completar todos los campos obligatorios');
    }

    // Asigna las variables correctamente
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $origen = $_POST['Origen'];
    $destino = $_POST['Destino'];
    $ID_categoria = $_POST['id_categoria'];
    
    // Agrega el viaje a la base de datos
    $this->model->agregarViaje($fecha, $hora, $origen, $destino, $ID_categoria);

    // Redirige al listado de viajes
    header('Location: ' . BASE_URL . 'listarViajes');
}

public function mostrarFormEditViaje($ID_viaje){
    $viaje = $this->model->getViajeById($ID_viaje);

    if (!$viaje) {
        return $this->view->mostrarErrores('El viaje que esta buscando no esta disponible');
    }
    $categoria = $this->model->verCategoriaById($viaje->id);
    $categorias = $this->model->getCategorias();
    $this->view->formEditViaje($ID_viaje, $viaje, $categoria, $categorias);
}
public function updateViajes($ID_viaje) {
          // Verifica si se ha enviado el formulario
    if (!isset($_POST['Fecha']) || empty($_POST['Fecha']) ||
    !isset($_POST['Hora']) || empty($_POST['Hora']) ||
    !isset($_POST['Origen']) || empty($_POST['Origen']) ||
    !isset($_POST['Destino']) || empty($_POST['Destino']) ||
    !isset($_POST['id_categoria']) || empty($_POST['id_categoria'])) {
    return $this->view->mostrarErrores('Falta completar todos los campos obligatorios');
}

            // Asigna las variables correctamente
            $fecha = $_POST['Fecha'];
            $hora = $_POST['Hora'];
            $origen = $_POST['Origen'];
            $destino = $_POST['Destino'];
            $ID_categoria = $_POST['id_categoria'];


      // Llamar al modelo para actualizar el viaje en la base de datos
    $this->model->editarViaje($fecha, $hora, $origen, $destino, $ID_categoria, $ID_viaje);

    // Redirigir al listado de viajes después de la edición
    header('Location: ' . BASE_URL . 'listarViajes');
}

public function eliminarViaje($ID_viaje){
    if($this->model->getViajeById($ID_viaje)){
        $this->model->deleteViaje($ID_viaje);
    }
    else{
        return $this->view->mostrarErrores('No existe el viaje');
    header('Location: ' . BASE_URL . 'listarViajes');
    }
}

public function verViajeXCategoria($categoria)
{
    $viaje = $this->model->mostrarViajeXCategoria($categoria);
    $categoria = $this->model->verCategoriaById($categoria);
    $this->view->mostrarViajeXCategoria($viaje, $categoria);
}
}
?>
<?php
require_once 'model/user.model.php';
 require_once 'view/user.view.php';

/* class userController {
  private $model;
  private $view;

  public function __construct() {
      $this->model = new UserModel();
      //$this->view = new ViajeView();
  }
  function listarViaje(){
    //Obtiene los viajes del modelo 
   $viaje = $this-> model -> getViaje();
 
   //Actualizar vista
   // $this-> view -> ShowViaje($viaje);
  }

 /* function addViaje(){
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    //Verifico campos obligatorios
    if(empty($origen) || empty($destino) || empty($fecha) || empty($hora)){
      $this -> view -> Error('Faltan campos obligatorios');
    }

    //Inserto la tarea en la bd
    $id = $this->model->agregarViaje($origen,$destino,$fecha,$hora);

    //Redirigimos al listado
    header("Location:" . BASE_URL);
  }*/
  ?>
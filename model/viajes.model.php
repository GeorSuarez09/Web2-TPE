<?php
 require_once './config.php';
 require_once './model/model.php';
 class ViajeModel {
    private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=viajes_at;charset=utf8', 'root', '');
        }

   
     //Obtengo el viaje 
    public function getViaje() {
        $query = $this->db->prepare('SELECT * FROM viaje');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
     //Agregar Viaje
    public function agregarViaje($fecha, $hora, $origen, $destino) {
        $query = $this->db->prepare('INSERT INTO viaje(fecha, hora, origen, destino) VALUES (?, ?, ?, ?)');
        $query->execute([$fecha, $hora, $origen, $destino]);
    }
    //Editar viaje
    public function editarViaje($fecha, $hora, $origen, $destino, $id) {
        $query = $this->db->prepare('UPDATE viaje SET `fecha` = ?, `hora` = ?, `origen` = ?, `destino` = ? WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
    }
     //Eliminar viaje
    public function EliminarViaje($id) {
        $query = $this->db->prepare('DELETE FROM viaje WHERE ID_viaje = ?');
        $query->execute([$id]);
    }
}
    ?>
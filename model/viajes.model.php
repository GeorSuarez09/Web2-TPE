<?php
 require_once './config.php';
 require_once './model/model.php';
 class ViajeModel {
    private $db;

    public function __construct() {
        $this->db = $this->conected();
    }

    private function conected() {
        return new PDO('mysql:host=localhost;dbname=viaje_at;charset=utf8', 'root', '');
    }
     //Obtengo el viaje por id
    public function getViaje() {
        $query = $this->db->prepare('SELECT * FROM viajes');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
     //Agregar Viaje
    public function agregarViaje($fecha, $hora, $origen, $destino) {
        $query = $this->db->prepare('INSERT INTO viajes(fecha, hora, origen, destino) VALUES (?, ?, ?, ?)');
        $query->execute([$fecha, $hora, $origen, $destino]);
    }
    //Editar viaje
    public function editarViaje($fecha, $hora, $origen, $destino, $id) {
        $query = $this->db->prepare('UPDATE viajes SET `fecha` = ?, `hora` = ?, `origen` = ?, `destino` = ? WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
    }
     //Eliminar viaje
    public function EliminarViaje($id) {
        $query = $this->db->prepare('DELETE FROM viajes WHERE ID_viaje = ?');
        $query->execute([$id]);
    }
}
    ?>
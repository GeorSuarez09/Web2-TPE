<?php
 require_once './config.php';
 require_once './model/model.php';
 class ViajeModel {
    private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=viajes_at;charset=utf8', 'root', '');
        }

   
     //Traer la DB completa fetchAll
    public function getViaje() {
        $query = $this->db->prepare('SELECT * FROM viaje');
        $query->execute();
        //Obtengo todos los datos que arroja la query
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    //Obtengo viaje por ID
    public function getViajeById($id) {
        $query = $this->db->prepare('SELECT * FROM viaje WHERE ID_viaje = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

     //Agregar Viaje
    public function agregarViaje($fecha, $hora, $origen, $destino) {
        $query = $this->db->prepare('INSERT INTO viaje(Fecha, Hora, Origen, Destino) VALUES (?, ?, ?, ?)');
        $query->execute([$fecha, $hora, $origen, $destino]);
        $id_viaje = $this->db->lastInsertId(); 
        return $id_viaje;
    }
/*
    //Editar viaje
    public function editarViaje($fecha, $hora, $origen, $destino, $id) {
        $query = $this->db->prepare('UPDATE viaje SET `Fecha` = ?, `Hora` = ?, `Origen` = ?, `Destino` = ? WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
    }*/

    // Eliminar viaje
    public function deleteViaje($id) {
        $query = $this->db->prepare('DELETE FROM viaje WHERE ID_viaje = ?');
        $query->execute([$id]); //evitar la inyeccion SQL
    }
}
    ?>
<?php

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
       $viaje = $query->fetchAll(PDO::FETCH_OBJ);
       return $viaje;
    }
    //Obtengo viaje por ID
    public function getViajeById($id) {
        $query = $this->db->prepare('SELECT * FROM viaje WHERE ID_viaje = ?');
        $query->execute([$id]);
        $viaje = $query->fetch(PDO::FETCH_OBJ);
        return $viaje;
    }

    public function getCategorias(){
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
    
    public function verCategoriaById($id_categoria){
        $query = $this->db->prepare('SELECT * FROM categoria WHERE ID_categoria = ?');
        $query->execute([$id_categoria]);      
        $categorias = $query->fetch(PDO::FETCH_OBJ);    
        return $categorias;
    }  
     //Agregar Viaje
    public function agregarViaje($fecha, $hora, $origen, $destino = false) {
        $query = $this->db->prepare('INSERT INTO viaje(Fecha, Hora, Origen, Destino) VALUES (?, ?, ?, ?)');
        $query->execute([$fecha, $hora, $origen, $destino]);
        $id_viaje = $this->db->lastInsertId(); 
        return $id_viaje;
    }

  //Editar viaje
    public function editarViaje($fecha, $hora, $origen, $destino, $id) {
        $query = $this->db->prepare('UPDATE viaje SET `Fecha` = ?, `Hora` = ?, `Origen` = ?, `Destino` = ? WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
    }

    // Eliminar viaje
    public function deleteViaje($id) {
        $query = $this->db->prepare('DELETE FROM viaje WHERE ID_viaje = ?');
        $query->execute([$id]); //evitar la inyeccion SQL
    }
}
    ?>
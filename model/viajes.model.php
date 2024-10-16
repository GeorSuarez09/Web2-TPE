<?php

class ViajeModel{
    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=viaje_at;charset=utf8', 'root', '');
     }
 
     public function getViaje() {
         //Ejecuto la consulta
         $query = $this->db->prepare('SELECT * FROM viajes');
         $query->execute();
     
         //Obtengo los datos en un arreglo de objetos
         $viajes = $query->fetchAll(PDO::FETCH_OBJ); 
     
         return $viajes;
     }
 
   //OBTENGO EL VIAJE POR ID
   public function getViajes($id) {    
    $query = $this->db->prepare('SELECT * FROM viajes WHERE ID_viaje = ?');
    $query->execute([$id]);   
    $viajes = $query->fetch(PDO::FETCH_OBJ);
    return $viajes;
}

     //AGREGO EL VIAJE
     public function agregarViaje($fecha, $hora, $origen, $destino) { 
         $query = $this->db->prepare('INSERT INTO viajes(fecha, hora, origen, destino) VALUES (?, ?, ?, ?)');
         $query->execute([$fecha, $hora, $origen, $destino]);
     }
 
    //EDITAR VIAJE
     public function editarProducto($fecha, $hora, $origen, $destino, $id) { 
        $query = $this->db->prepare('UPDATE viajes SET `fecha` = ?, `hora` = ?, `origen` = ?, `destino` = ?, WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
     }
     
     //ELIMINO VIAJE
     public function EliminarViaje($id) {
         $query = $this->db->prepare('DELETE FROM viajes WHERE ID_viaje= ?');
         $query->execute([$id]);
     }
  
    }
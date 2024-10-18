<?php
require_once './config.php';
require_once './model/model.php';
class ViajeModel extends Model{
   //OBTENGO EL VIAJE POR ID
   public function getViaje() {    
    $query = $this->db->prepare('SELECT * FROM viajes WHERE ID_viaje = ?');
    $query->execute();   
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
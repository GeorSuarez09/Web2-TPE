<?php
 
class ViajeModel{
   private function conected() {
        $db = new PDO('mysql:host=localhost;dbname=viaje_at;charset=utf8', 'root', '');
        return $db;
     }
 
     public function getViaje() {
          //Abrimos la conexion
          $db = $this-> conected();

         //Ejecuto la consulta
         $query = $db->prepare('SELECT * FROM viajes');
         $query->execute();
     
         //Obtengo los datos en un arreglo de objetos
         $viajes = $query->fetchAll(PDO::FETCH_OBJ); 
     
         return $viajes;
     }
 

     //AGREGO EL VIAJE
     public function agregarViaje($fecha, $hora, $origen, $destino) { 
             //Abrimos la conexion
             $db = $this-> conected();

         $query = $db->prepare('INSERT INTO viajes(fecha, hora, origen, destino) VALUES (?, ?, ?, ?)');
         $query->execute([$fecha, $hora, $origen, $destino]);

         return $db->lastInsertId();
     }
 
    //EDITAR VIAJE
     public function editarProducto($fecha, $hora, $origen, $destino, $id) { 
             //Abrimos la conexion
             $db = $this-> conected();

        $query = $db->prepare('UPDATE viajes SET `fecha` = ?, `hora` = ?, `origen` = ?, `destino` = ?, WHERE `ID_viaje` = ?');
        $query->execute([$fecha, $hora, $origen, $destino, $id]);
     }
     
     //ELIMINO VIAJE
     public function EliminarViaje($id) {
             //Abrimos la conexion
             $db = $this-> conected(); 

         $query = $db->prepare('DELETE FROM viajes WHERE ID_viaje= ?');
         $query->execute([$id]);
     }
  
    }
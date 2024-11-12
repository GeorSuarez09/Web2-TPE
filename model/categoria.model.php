<?php
require_once './model/model.php';

class CategoryModel extends Model {
   
       
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
    public function getCategoria() {

        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
    
        $categorias= $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $categorias;
    }
 //Obbtengo categoria por ID
    public function getCategory($id) {    
        $query = $this->db->prepare('SELECT * FROM categoria WHERE ID_categoria = ?');
        $query->execute([$id]);   
    
        $categoria = $query->fetch(PDO::FETCH_OBJ);
    
        return $categoria;
    }

 
    public function insertoCategoria($temporada, $empresa, $comodidad) { 
        $query = $this->db->prepare('INSERT INTO categoria(temporada, empresa, comodidad) VALUES (?, ?, ?)');
        $query->execute([$temporada, $empresa, $comodidad]);
    
        $id = $this->db->lastInsertId();

        return $id;
    }

   /* public function editarCategoria($temporada, $empresa, $comodidad, $id) {
        $edit = $this->db->prepare("UPDATE categoria SET temporada = ?, empresa = ?, comodidad = ? WHERE ID_categoria = ?");

        return $edit->execute([$temporada, $empresa, $comodidad, $id]);
    }
    
    
    public function eliminarCategoria($id) {
        $query = $this->db->prepare('DELETE FROM categoria WHERE ID_categoria = ?');
        $query->execute([$id]);
    }*/
}
?>
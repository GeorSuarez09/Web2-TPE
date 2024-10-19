<?php
require_once './model/model.php';

class CategoryModel extends Model {
 
    public function getCategoria() {

        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
    
        $categorys = $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $categorys;
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

    public function editarCategoria($temporada, $empresa, $comodidad, $id) {
        $edit = $this->db->prepare("UPDATE categoria SET temporada = ?, empresa = ?, comodidad = ? WHERE ID_categoria = ?");

        return $edit->execute([$temporada, $empresa, $comodidad, $id]);
    }
    
    
    public function eliminarCategoria($id) {
        $query = $this->db->prepare('DELETE FROM categoria WHERE ID_categoria = ?');
        $query->execute([$id]);
    }
}
?>
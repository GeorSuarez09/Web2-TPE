<?php
<<<<<<< HEAD
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
=======
class categoriaModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=viajes_at;charset=utf8', 'root', '');
>>>>>>> 880753fe2106a3026170a6b6b9bf60810b437ed5
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
public function getViajeById($ID_viaje) {
   $query = $this->db->prepare('SELECT * FROM viaje WHERE ID_viaje = ?');
   $query->execute([$ID_viaje]);
   $viaje = $query->fetch(PDO::FETCH_OBJ);
   return $viaje;
}

public function getCategorias(){
   $query = $this->db->prepare('SELECT * FROM categoria');
   $query->execute();
   $categorias = $query->fetchAll(PDO::FETCH_OBJ);
   return $categorias;
}

public function verCategoriaById($ID_categoria){
   $query = $this->db->prepare('SELECT * FROM categoria WHERE ID_categoria = ?');
   $query->execute([$ID_categoria]);      
   $categoria = $query->fetch(PDO::FETCH_OBJ);    
   return $categoria;
}  

    //insertar a la DB 
    public function agregarCategoria($temporada, $empresa, $comodidad) { 
        $query = $this->db->prepare('INSERT INTO categoria (temporada, empresa, comodidad) VALUES (?, ?, ?)');
        $query->execute([$temporada, $empresa, $comodidad]);    
        $ID_categoria= $this->db->lastInsertId(); 
        return $ID_categoria;
    }
    
    

    // editar de la DB
    public function editarCategoria($ID_categoria, $temporada, $empresa, $comodidad) { 
        $query = $this->db->prepare('UPDATE categoria SET temporada = ?, empresa = ?, comodidad = ? WHERE ID_categoria = ?');
        $query->execute([$ID_categoria, $temporada, $empresa, $comodidad]);
    }
    
    
    // borrar de la DB
    public function borrarCategoria($ID_categoria){
        $query = $this->db->prepare('DELETE FROM categoria WHERE ID_categoria = ?');
        $query->execute([$ID_categoria]);
    }

}
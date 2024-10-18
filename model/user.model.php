<?php
class UserModel{
    private $db;
    
    public function __construct()
    {
        $this -> db = new PDO('mysql:host=localhost;dbname=viaje_at;charset=utf8', 'root', '');
    }

    public function getUserByGmail($gmail){
        $query = $this -> db->prepare("SELECT * FROM usuario WHERE gmail = ?");
        $query ->execute([$gmail]);

        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
   
     //Obtengo el usuario
     public function getUsuario() {
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
     //Agregar Usuario
    public function agregarUsuario($nombre, $gmail, $dni) {
        $query = $this->db->prepare('INSERT INTO usuario(nombre, gmail, DNI) VALUES (?, ?, ?)');
        $query->execute([$nombre, $gmail, $dni]);
    }
    //Editar Usuario
    public function editarViaje($nombre, $gmail, $dni, $id) {
        $query = $this->db->prepare('UPDATE usuario SET `nombre` = ?, `gmail` = ?, `dni` = ? WHERE `ID_viaje` = ?');
        $query->execute([$nombre, $gmail, $dni, $id]);
    }
     //Eliminar Usuario
    public function EliminarViaje($id) {
        $query = $this->db->prepare('DELETE FROM usuario WHERE ID_usuario = ?');
        $query->execute([$id]);
    }
}
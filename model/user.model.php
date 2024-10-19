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
}
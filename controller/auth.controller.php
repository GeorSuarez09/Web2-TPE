<?php
require_once './model/user.model.php';
require_once './view/auth.view.php';

class AuthController {
    private $model;
    private $view;

    public function __construct($res) {
        $this->model = new UserModel();
        $this->view = new AuthView($res->user);
    }

    public function showLogin() {
        // Muestro el formulario de login
        return $this->view->showLogin();
    }

    public function login() {
    
        if (!isset($_POST['gmail']) || empty($_POST['gmail'])) {
            return $this->view->showLogin('Falta completar el nombre de usuario');
        }
    
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            return $this->view->showLogin('Falta completar la contraseña');
        }
    
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];
        
        // Verificar que el usuario está en la base de datos
        $userFromDB = $this->model->getUserByGmail($gmail);
        
        echo password_verify($password, $userFromDB->password);
        // exit;
        if($userFromDB && password_verify($password, $userFromDB->password)){
            
            // Guardo en la sesión el ID del usuario
            session_start();
            $_SESSION['ID_USER'] = $userFromDB->id;
            $_SESSION['EMAIL_USER'] = $userFromDB->gmail;
            $_SESSION['LAST_ACTIVITY'] = time();
            header('Location: ' . BASE_URL);
        } else {
            return $this->view->showLogin('Credenciales incorrectas');
        }
       
    }

    public function logout(){
        session_start(); //inicializa el manejo de sesiones
        session_destroy(); //agarra los datos de session_start y la borra
        header('Location: ' . BASE_URL);
    }
    
}
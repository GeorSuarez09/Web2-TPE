<?php
require_once 'model/categoria.model.php';
require_once 'view/view.categoria.php';

/*class CategoriaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoriaView();
    }

    public function listarCategorias() {
        $categorias = $this->model->getCategoria();
        $this->view->showCategorias($categorias);
    }

    public function agregarCategoria() {
        $temporada = $_POST['temporada'];
        $empresa = $_POST['empresa'];
        $comodidad = $_POST['comodidad'];

        if (empty($temporada) || empty($empresa) || empty($comodidad)) {
            $this->view->showEliminarCategoria('Faltan campos obligatorios');
            return;
        }

        $this->model->insertoCategoria($temporada, $empresa, $comodidad);
        header("Location: " . BASE_URL . "categorias");
    }

    public function editarCategoria($id) {
        $categoria = $this->model->getCategory($id);
        $this->view->showEditarCategoria($categoria);
    }

    public function updateCategoria() {
        $id = $_POST['id'];
        $temporada = $_POST['temporada'];
        $empresa = $_POST['empresa'];
        $comodidad = $_POST['comodidad'];

        if (empty($temporada) || empty($empresa) || empty($comodidad)) {
            $this->view->showEliminarCategoria('Faltan campos obligatorios');
            return;
        }

        $this->model->editarCategoria($temporada, $empresa, $comodidad, $id);
        header("Location: " . BASE_URL . "categorias");
    }

    public function eliminarCategoria($id) {
        $categoria = $this->model->getCategory($id);
        if ($categoria) {
            $this->view->showEliminarCategoria($categoria);
        } else {
            // Manejar caso en que la categoría no se encuentra
            header("Location: " . BASE_URL . "categorias");
        }
    }
    }

?>*/
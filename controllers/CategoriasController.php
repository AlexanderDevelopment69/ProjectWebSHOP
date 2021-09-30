<?php
require_once 'models/CategoriasModels.php';
require_once 'models/ProductosModels.php';

class CategoriasController {
    public function index() {
        Utils::isAdmin();
        $categoria = new CategoriasModels;
        $categorias = $categoria->getAll();
        require_once 'views/categorias/categorias.php';
    }
    public function crear() {
        Utils::isAdmin();
        require_once 'views/categorias/crear.php';
    }
    public function save() {
        $categoria = new CategoriasModels;
        
//        var_dump($crear->save());die();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categoria->setId($id);
            $save = $categoria->edit();
        //                    var_dump($save); die();                    
        } else {
            $save = $categoria->save();
        }
        if ($save) {
            $_SESSION['producto'] = "complete";
        } else {
            $_SESSION['producto'] = "failed";
        }
header("location: " . base_url . "Categorias/index");
    }

        

     public function ver() {
        if(isset($_GET['id'])){
            //consigueindo categoria
            $id = $_GET['id'];
            $categoria = new CategoriasModels();
            $categoria->setId($id);
            $cate = $categoria->getOne();
            //consiguiendo productos
            $productos = new ProductosModels();
            $productos->setCategoria_id($id);
            $productos = $productos->getAllCategory();
           
        }
        require_once 'views/categorias/ver.php';
    }
    public function edit() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categoria = new CategoriasModels();
            $categoria->setId($id);
            $cat = $categoria->getOne();
//            var_dump($pro); die(); 
            require_once 'views/categorias/crear.php';
        } else {
            header("location : " . base_url . "Categorias/index");
        }
    }
    public function eliminar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
//            var_dump($id); die();
            $categoria = new CategoriasModels();
            $categoria->setId($id);
            $delete = $categoria->eliminar();
            if ($delete) {
                $_SESSION['delete'] = 'delete';
            } else {
                $_SESSION['delete'] = 'notDelete';
            }
        } else {
            $_SESSION['delete'] = 'notDelete';
        }
        header("location: " . base_url . "Categorias/index");
    }
}
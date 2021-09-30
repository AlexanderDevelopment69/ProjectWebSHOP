<?php

require_once 'models/ProductosModels.php';
require_once 'models/CategoriasModels.php';

class ProductosController {

    public function index() {
        $productos = new ProductosModels();
        $producto = $productos->getAll();
        require_once 'views/productos/productosDestacados.php';
    }

    public function gestionar() {
        $producto = new ProductosModels();
        $productos = $producto->getAll();
        require_once 'views/productos/gestionar.php';
    }

    public function crear() {

        require_once 'views/productos/crear.php';
    }
   public function ver() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = new ProductosModels();
            $categoria = new CategoriasModels();
            $producto->setId($id);
            $categoria->setId($id);
            $cate = $producto->getOne();
            $produc = $producto->getOne();
            $productito = $producto->getRandom(6);
//            var_dump($produc); die(); 
            require_once 'views/productos/ver.php';
        } 
    }
    public function save() {
//        die();
        if ($_POST) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : FALSE;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : FALSE;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : FALSE;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : FALSE;
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : FALSE;
            $costo = isset($_POST['costo']) ? $_POST['costo'] : FALSE;
            $color = isset($_POST['color']) ? $_POST['color'] : FALSE;
            $estado = isset($_POST['estado']) ? $_POST['estado'] : FALSE;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : FALSE;
            $proveedor = isset($_POST['proveedor']) ? $_POST['proveedor'] : FALSE;
            $talla = isset($_POST['talla']) ? $_POST['talla'] : FALSE;

            
            if ($nombre && $categoria && $descripcion && $costo && $precio && $cantidad && $color && $estado && $marca && $proveedor && $talla) {
                $producto = new ProductosModels();
                $producto->setNombre($nombre);
                $producto->setCategoria_id($categoria);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($cantidad);
                $producto->setCosto($costo);
                $producto->setColor($color);
                $producto->setEstado($estado);
                $producto->setMarca($marca);
                $producto->setProveedor($proveedor);
                $producto->setTalla($talla);

                if (isset($_FILES)) {
                    $file = $_FILES['foto'];
                    $filename = $file['name'];
                    $filetype = $file['type'];
//                var_dump($file);                die();
                    if ($filetype == "image/jpeg" || $filetype == "image/png" || $filetype == "image/jpg" || $filetype == "image/tiff" || $filetype == "image/gif") {
                        if (!is_dir('uploads/images')) {
                            mkdir('uploads/images', 0777, true);
                        }
                        move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);
                        $producto->setImagen($filename);
                    }
                }
//                var_dump($file);die();
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId($id);
                    $save = $producto->edit();
//                    var_dump($save); die();                    
                } else {
                    $save = $producto->save();
                }
                if ($save) {
                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }
            } else {
                $_SESSION['producto'] = "failed";
            }
        } else {
            $_SESSION['producto'] = "failed";
        }
        header("location: " . base_url . "Productos/gestionar");
    }

    public function edit() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = new ProductosModels();
            $producto->setId($id);
            $pro = $producto->getOne();
//            var_dump($pro); die(); 
            require_once 'views/productos/crear.php';
        } else {
            header("location : " . base_url . "Productos/gestionar");
        }
    }

    public function eliminar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
//            var_dump($id); die();
            $producto = new ProductosModels();
            $producto->setId($id);
            $delete = $producto->eliminar();
            if ($delete) {
                $_SESSION['delete'] = 'delete';
            } else {
                $_SESSION['delete'] = 'notDelete';
            }
        } else {
            $_SESSION['delete'] = 'notDelete';
        }
        header("location: " . base_url . "Productos/gestionar");
    }

}

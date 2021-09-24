<?php
include_once("modelos/producto.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorProductos{

    public function inicio(){
        $producto=Producto::consultar();
        include_once("vistas/productos/inicio.php");
    }

    public function crear(){
        //if($_POST){
        //    print_r($_POST);
       //     $catNombre=$_POST['catNombre'];
       //     $catEstado=$_POST['catEstado'];
       //     $catDescripcion=$_POST['catDescripcion'];
      //      Producto::crear($catNombre,$catEstado,$catDescripcion);
      //      header("Location:./?controlador=productos&accion=inicio");
      //  }
        include_once("vistas/productos/crear.php");
    }

    public function editar(){
        

        if($_POST){
            $catID=$_POST['catID'];
            $catNombre=$_POST['catNombre'];
            $catEstado=$_POST['catEstado'];
            $catDescripcion=$_POST['catDescripcion'];
            Producto::editar($catID,$catNombre,$catEstado,$catDescripcion);
            header("Location:./?controlador=productos&accion=inicio");
            
        }

        $catID=$_GET['catID'];

        $Producto = Producto::buscar($catID);

        include_once("vistas/productos/editar.php");
    }
    public function borrar(){
        print_r($_GET);
        $catID=$_GET['catID'];
        Producto::borrar($catID);
        header("Location:./?controlador=productos&accion=inicio");
    }

}

?>
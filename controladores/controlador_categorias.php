<?php
include_once("modelos/categoria.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorCategorias{

    public function inicio(){
        $categoria=Categoria::consultar();
        include_once("vistas/categorias/inicio.php");
    }

    public function crear(){
        if($_POST){
            print_r($_POST);
            $catNombre=$_POST['catNombre'];
            $catEstado=$_POST['catEstado'];
            $catDescripcion=$_POST['catDescripcion'];
            Categoria::crear($catNombre,$catEstado,$catDescripcion);
            header("Location:./?controlador=categorias&accion=inicio");
        }
        include_once("vistas/categorias/crear.php");
    }

    public function editar(){
        

        if($_POST){
            $catID=$_POST['catID'];
            $catNombre=$_POST['catNombre'];
            $catEstado=$_POST['catEstado'];
            $catDescripcion=$_POST['catDescripcion'];
            Categoria::editar($catID,$catNombre,$catEstado,$catDescripcion);
            header("Location:./?controlador=categorias&accion=inicio");
            
        }

        $catID=$_GET['catID'];

        $categoria = Categoria::buscar($catID);

        include_once("vistas/categorias/editar.php");
    }
    public function borrar(){
        print_r($_GET);
        $catID=$_GET['catID'];
        Categoria::borrar($catID);
        header("Location:./?controlador=categorias&accion=inicio");
    }

}

?>
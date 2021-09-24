<?php
include_once("modelos/marca.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorMarcas{

    public function inicio(){
        $marca=Marca::consultar();
        include_once("vistas/marcas/inicio.php");
    }

    public function crear(){
        if($_POST){
            print_r($_POST);
            $marcNombre=$_POST['marcNombre'];
            $marcDescripcion=$_POST['marcDescripcion'];
            Marca::crear($marcNombre,$marcDescripcion);
            header("Location:./?controlador=marcas&accion=inicio");
        }
        include_once("vistas/marcas/crear.php");
    }

    public function editar(){
        

        if($_POST){
            $marcID=$_POST['marcID'];
            $marcNombre=$_POST['marcNombre'];
            $marcDescripcion=$_POST['marcDescripcion'];
            Marca::editar($marcID,$marcNombre,$marcDescripcion);
            header("Location:./?controlador=marcas&accion=inicio");
            
        }

        $marcID=$_GET['marcID'];

        $marca = Marca::buscar($marcID);

        include_once("vistas/marcas/editar.php");
    }
    public function borrar(){
        print_r($_GET);
        $marcID=$_GET['marcID'];
        Marca::borrar($marcID);
        header("Location:./?controlador=marcas&accion=inicio");
    }

}

?>
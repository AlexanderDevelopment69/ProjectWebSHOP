<?php
include_once("modelos/proveedor.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorProveedores{

    public function inicio(){
        $proveedor=Proveedor::consultar();
        include_once("vistas/proveedores/inicio.php");
    }

    public function crear(){
        if($_POST){
            print_r($_POST);
            $provRUC=$_POST['provRUC'];
            $provNombre=$_POST['provNombre'];
            $provTelefono=$_POST['provTelefono'];
            $provDireccion=$_POST['provDireccion'];
            $provCorreo=$_POST['provCorreo'];
            Proveedor::crear($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo);
            header("Location:./?controlador=proveedores&accion=inicio");
        }
        include_once("vistas/proveedores/crear.php");
    }

    public function editar(){
        

        if($_POST){
            $provRUC=$_POST['provRUC'];
            $provNombre=$_POST['provNombre'];
            $provTelefono=$_POST['provTelefono'];
            $provDireccion=$_POST['provDireccion'];
            $provCorreo=$_POST['provCorreo'];
            Proveedor::editar($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo);
            header("Location:./?controlador=proveedores&accion=inicio");
            
        }

        $provRUC=$_GET['provRUC'];

        $proveedor = Proveedor::buscar($provRUC);

        include_once("vistas/proveedores/editar.php");
    }
    public function borrar(){
        print_r($_GET);
        $provRUC=$_GET['provRUC'];
        Proveedor::borrar($provRUC);
        header("Location:./?controlador=proveedores&accion=inicio");
    }

}

?>
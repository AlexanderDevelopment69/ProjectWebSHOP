<?php
include_once("modelos/empleado.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){
        $empleados=Empleado::consultar();
        include_once("vistas/empleados/inicio.php");
    }

    public function crear(){
        if($_POST){
            print_r($_POST);
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $correo=$_POST['correo'];
            $contrasenia=$_POST['contrasenia'];
            $domicilio=$_POST['domicilio'];
            Empleado::crear($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("vistas/empleados/crear.php");
    }

    public function editar(){
        

        if($_POST){
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $correo=$_POST['correo'];
            $contrasenia=$_POST['contrasenia'];
            $domicilio=$_POST['domicilio'];
            Empleado::editar($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio);
            header("Location:./?controlador=empleados&accion=inicio");
            
        }

        $dni=$_GET['dni'];

        $empleado = Empleado::buscar($dni);

        include_once("vistas/empleados/editar.php");
    }
    public function borrar(){
        print_r($_GET);
        $dni=$_GET['dni'];
        Empleado::borrar($dni);
        header("Location:./?controlador=empleados&accion=inicio");
    }

}

?>
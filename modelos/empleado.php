<?php
class Empleado{
    public $dni;
    public $nombre;
    public $apellido;
    public $correo;
    public $contrasenia;
    public $domicilio;
    public function __construct($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio){
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->contrasenia=$contrasenia;
        $this->domicilio=$domicilio;
    }

    public static function consultar(){
        $listaEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM tblusuarios");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[]= new Empleado($empleado['usuarioDni'],$empleado['usuarioNombre'],$empleado['usuarioApellidos'],$empleado['usuarioCorreo'],$empleado['usuarioContrasenia'],$empleado['usuarioDomicilio']);
        }
        return $listaEmpleados;

    }

    public static function crear($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("INSERT INTO tblusuarios (usuarioDni, usuarioNombre, usuarioApellidos, usuarioCorreo,usuarioContrasenia,usuarioDomicilio) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio));
        
        
    }

    public static function borrar($dni){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM  tblusuarios WHERE usuarioDni=?");
        $sql->execute(array($dni));
    }


    public static function buscar($dni){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM  tblusuarios WHERE usuarioDni=?");
        $sql->execute(array($dni));
        $empleado=$sql->fetch();
        return new Empleado($empleado['usuarioDni'],$empleado['usuarioNombre'],$empleado['usuarioApellidos'],$empleado['usuarioCorreo'],$empleado['usuarioContrasenia'],$empleado['usuarioDomicilio']);
        
    }

    public static function editar($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE tblusuarios SET usuarioDni=?, usuarioNombre=?, usuarioApellidos=?, usuarioCorreo=?,usuarioContrasenia=?,usuarioDomicilio=? WHERE usuarioDni=?");
        $sql->execute(array($dni,$nombre,$apellido,$correo,$contrasenia,$domicilio,$dni));
        
        
    }


}
?>
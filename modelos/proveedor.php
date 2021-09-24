<?php
class Proveedor{
    public $provRUC;
    public $provNombre;
    public $provTelefono;
    public $provDireccion;
    public $provCorreo;
    public function __construct($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo){
        $this->provRUC=$provRUC;
        $this->provNombre=$provNombre;
        $this->provTelefono=$provTelefono;
        $this->provDireccion=$provDireccion;
        $this->provCorreo=$provCorreo;
        
    }

    public static function consultar(){
        $listaProveedor=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM tblproveedores");

        foreach($sql->fetchAll() as $proveedor){
            $listaProveedor[]= new Proveedor($proveedor['provRUC'],$proveedor['provNombre'],$proveedor['provTelefono'],$proveedor['provDireccion'],$proveedor['provCorreo']);
        }
        return $listaProveedor;

    }

    public static function crear($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("INSERT INTO tblproveedores (provRUC,provNombre,provTelefono,provDireccion,provCorreo) VALUES (?,?,?,?,?)");
        $sql->execute(array($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo));
        
        
    }

    public static function borrar($provRUC){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM  tblproveedores WHERE provRUC=?");
        $sql->execute(array($provRUC));
    }


    public static function buscar($provRUC){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM  tblproveedores WHERE provRUC=?");
        $sql->execute(array($provRUC));
        $proveedor=$sql->fetch();
        return new Proveedor($proveedor['provRUC'],$proveedor['provNombre'],$proveedor['provTelefono'],$proveedor['provDireccion'],$proveedor['provCorreo']);
        
    }

    public static function editar($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE tblproveedores SET provRUC=?,provNombre=?,provTelefono=?,provDireccion=?,provCorreo=? WHERE provRUC=?");
        $sql->execute(array($provRUC,$provNombre,$provTelefono,$provDireccion,$provCorreo,$provRUC));
        
        
    }


}
?>
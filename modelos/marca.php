<?php
class Marca{
    public $marcNombre;
    public $marcDescripcion;
    public function __construct($marcID,$marcNombre,$marcDescripcion){
        $this->marcID=$marcID;
        $this->marcNombre=$marcNombre;
        $this->marcDescripcion=$marcDescripcion;
        
    }

    public static function consultar(){
        $listaMarca=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM tblmarcas");

        foreach($sql->fetchAll() as $marca){
            $listaMarca[]= new Marca($marca['marcID'],$marca['marcNombre'],$marca['marcDescripcion']);
        }
        return $listaMarca;

    }

    public static function crear($marcNombre,$marcDescripcion){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("INSERT INTO tblmarcas(marcNombre, marcDescripcion) VALUES (?,?)");
        $sql->execute(array($marcNombre,$marcDescripcion));
        
        
    }

    public static function borrar($marcID){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM  tblmarcas WHERE marcID=?");
        $sql->execute(array($marcID));
    }


    public static function buscar($marcID){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM  tblmarcas WHERE marcID=?");
        $sql->execute(array($marcID));
        $marca=$sql->fetch();
        return new Marca($marca['marcID'],$marca['marcNombre'],$marca['marcDescripcion']);
        
    }

    public static function editar($marcID,$marcNombre,$marcDescripcion){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE tblmarcas SET marcNombre=?, marcDescripcion=? WHERE marcID=?");
        $sql->execute(array($marcNombre,$marcDescripcion,$marcID));
        
        
    }


}
?>
<?php
class Categoria{
    public $catNombre;
    public $catEstado;
    public $catDescripcion;
    public function __construct($catID,$catNombre,$catEstado,$catDescripcion){
        $this->catID=$catID;
        $this->catNombre=$catNombre;
        $this->catEstado=$catEstado;
        $this->catDescripcion=$catDescripcion;
        
    }

    public static function consultar(){
        $listaCategoria=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM tblcategorias");

        foreach($sql->fetchAll() as $categoria){
            $listaCategoria[]= new Categoria($categoria['catID'],$categoria['catNombre'],$categoria['catEstado'],$categoria['catDescripcion']);
        }
        return $listaCategoria;

    }

    public static function crear($catNombre,$catEstado,$catDescripcion){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("INSERT INTO tblcategorias (catNombre, catEstado, catDescripcion) VALUES (?,?,?)");
        $sql->execute(array($catNombre,$catEstado,$catDescripcion));
        
        
    }

    public static function borrar($catID){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM  tblcategorias WHERE catID=?");
        $sql->execute(array($catID));
    }


    public static function buscar($catID){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM  tblcategorias WHERE catID=?");
        $sql->execute(array($catID));
        $categoria=$sql->fetch();
        return new Categoria($categoria['catID'],$categoria['catNombre'],$categoria['catEstado'],$categoria['catDescripcion']);
        
    }

    public static function editar($catID,$catNombre,$catEstado,$catDescripcion){
        
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE tblcategorias SET catNombre=?, catEstado=?, catDescripcion=? WHERE catID=?");
        $sql->execute(array($catNombre,$catEstado,$catDescripcion,$catID));
        
        
    }


}
?>
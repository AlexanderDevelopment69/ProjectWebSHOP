<?php

class ProductosModels{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $costo; //esto borramos
    private $fecha;
    private $imagen;
    private $color;
    private $estado;
    private $marca;
    private $proveedor;
    private $talla;
    private $db;
    
    function __construct() {
        $this->db = database::connect();
    }
            
    function getId() {
        return $this->id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getCosto() {
        return $this->costo;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getImagen() {
        return $this->imagen;
    }
    function getColor() {
        return $this->color;
    }
    function getEstado() {
        return $this->estado;
    }
    function getMarca() {
        return $this->marca;
    }
    function getProveedor() {
        return $this->proveedor;
    }
    function getTalla() {
        return $this->talla;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $this->db->real_escape_string($categoria_id);
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio) {
        $this->precio = $this->db->real_escape_string($precio);
    }

    function setStock($stock) {
        $this->stock = $this->db->real_escape_string($stock);
    }

    function setCosto($costo) {
        $this->costo = $this->db->real_escape_string($costo);
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    function setColor($color) {
        $this->color = $this->db->real_escape_string($color);
    }
    function setEstado($estado) {
        $this->estado = $this->db->real_escape_string($estado);
    }
    function setMarca($marca) {
        $this->marca = $this->db->real_escape_string($marca);
    }
    function setProveedor($proveedor) {
        $this->proveedor = $this->db->real_escape_string($proveedor);
    }
    function setTalla($talla) {
        $this->talla = $this->db->real_escape_string($talla);
    }

    public function getAll(){
        $sql = "CALL sp_getAll ";
        $result = $this->db->query($sql);
        return $result;
    }
    
    public function getAllCategory(){
        $sql = "CALL sp_getAllCategory('{$this->getCategoria_id()}')";
//        var_dump($sql);
        $result = $this->db->query($sql);
//        var_dump($this->db->error);
        return $result;
    }
    
    public function getRandom($limit){
        $sql="CALL sp_getRandomPro($limit)";
        $result = $this->db->query($sql);
        return $result;
    }
    public function save(){
        print_r("$_POST");
        $sql="CALL sp_insertar_productos ('{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}', '{$this->getPrecio()}' , '{$this->getStock()}', '{$this->getCosto()}', CURDATE(), '{$this->getImagen()}', '{$this->getColor()}',  '{$this->getEstado()}', '{$this->getMarca()}', '{$this->getProveedor()}', '{$this->getTalla()}' )";
             print_r($sql);
        $guardar = $this->db->query($sql);
        $result = FALSE;
        if($guardar){
            $result = TRUE;
        }
        return $result;
    }
    public function eliminar() {
        $sql = "CALL sp_eliminar_productos({$this->getid()})";
        $eliminar = $this->db->query($sql);
        $result = FALSE;
        if($eliminar){
            $result = TRUE;
        }
        return $result;
    }
    public function edit() {
        $stock = $this->getStock();
        if($stock == '0'){
            $stock = 0;
        }
        
        $sql="CALL sp_actualizar_productos ('{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}', '{$this->getPrecio()}' ,'$stock', '{$this->getCosto()}','{$this->getImagen()}','{$this->getColor()}', '{$this->getEstado()}','{$this->getMarca()}', '{$this->getProveedor()}', '{$this->getTalla()}','{$this->getId()}' )";
        
        $editar = $this->db->query($sql);
        $result = FALSE;
        if($editar){
            $result= TRUE;
        }

        return $result;

        }

        public function getOne(){
            $sql = "SELECT * FROM productos WHERE id = {$this->getId()}; "; // no se me ocurre una idea :c
            $result = $this->db->query($sql);
            return $result->fetch_object();
        }
}

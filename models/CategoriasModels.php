<?php
class CategoriasModels {
    private $nombre;
    private $id;
    private $db;
    public function __construct() {
        $this->db = database::connect();
    }
    function getNombre() {
        return $this->nombre;
    }
    function getId() {
        return $this->id;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setId($id) {
        $this->id = $id;
    }
    
    public function save() {
        if (isset($_POST) && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $sql = "INSERT INTO categorias VALUES (NULL, '$nombre'); ";
            $guardar =$this->db->query($sql);
            $result = FALSE;
            if($guardar){
                $result = TRUE;
            }
             return $result;
        }
    }
    public function eliminar() {
        $sql = "DELETE FROM categorias WHERE id = {$this->getId()} ;";
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
//        var_dump($stock);die();
        $sql = "UPDATE categorias SET nombre = '{$this->getNombre()}'";
        $sql .=" WHERE id = {$this->getId()};";
//        var_dump($sql);
        $editar = $this->db->query($sql);
        $result = FALSE;
        if($editar){
            $result= TRUE;
        }
//        var_dump($this->db->error);die();
        return $result;
//        var_dump($sql); die();
        }


    public function getAll() {
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getColores() {
        $sql = "SELECT * FROM colores ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getEstados() {
        $sql = "SELECT * FROM estados ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getMarca() {
        $sql = "SELECT * FROM marcas ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getProveedor() {
        $sql = "SELECT * FROM proveedores ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getTalla() {
        $sql = "SELECT * FROM tallas ORDER BY id ASC;";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    public function getOne() {
        $sql = "SELECT * FROM categorias WHERE id = {$this->getId()};";
        
        $categoria = $this->db->query($sql);
        return $categoria->fetch_object();
    }
}
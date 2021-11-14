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
            $sql = "CALL sp_insertar_categoria('$nombre')";
            $guardar =$this->db->query($sql);
            $result = FALSE;
            if($guardar){
                $result = TRUE;
            }
             return $result;
        }
    }
    public function eliminar() {
        
        $sql = "CALL sp_eliminar_categoria({$this->getId()})";
        $eliminar = $this->db->query($sql);
        
        $result = FALSE;
        if($eliminar){
            $result = TRUE;
        }
        return $result;
    }

    public function edit() {
        if (isset($_POST) && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
        $sql="CALL sp_actualizar_categoria('$nombre',{$this->getId()})";
        $editar = $this->db->query($sql);
        $result = FALSE;
        if($editar){
            $result= TRUE;
        }
        return $result;
        }
    }


    public function getAll() {
        $sql = "CALL sp_mostrar_categorias";
        $buscar = $this->db->query($sql);
        
        return $buscar;
    }

    public function getColores() {
        $sql = "call sp_mostrar_colores";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }

    public function getEstados() {
        $sql = "call sp_mostrar_estados";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }

    public function getPagos() {
        $sql = "SELECT * FROM pago ORDER BY id ASC;";
        $buscar = $this->db->query($sql);
        return $buscar;
    }
    

    public function getMarca() {
        $sql = "call sp_mostrar_marcas";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }

    public function getProveedor() {
        $sql = "call sp_mostrar_proveedores";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }

    public function getTalla() {
        $sql = "call sp_mostrar_tallas";
        
        $buscar = $this->db->query($sql);
        return $buscar;
    }

    public function getOne() {
        $sql = "SELECT * FROM categorias WHERE id = {$this->getId()};";
        
        $categoria = $this->db->query($sql);
        return $categoria->fetch_object();
    }
}
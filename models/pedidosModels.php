<?php
// FALTA HACER LOS PROCEDIMIENTOS --  CAMBIAR LAS SENTENCIAS SQL -----------------------------------------
class Pedidos {

    private $id;
    private $usuario_id;
    private $departamento;
    private $municipio;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct() {
        $this->db = database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCoste() {
        return $this->coste;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCoste($coste) {
        $this->coste = $coste;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function request() {
        $sql = " CALL sp_insertar_pedidos(NULL,{$this->getUsuario_id()}, '{$this->getDepartamento()}', '{$this->municipio}', '{$this->direccion}', {$this->getCoste()}, 'confirmed', CURDATE(), CURTIME())";
        $guardar = $this->db->query($sql);
        $result = false;
        if ($guardar) {
            $result = TRUE;
        }
        return $result;
    }

    function saveLineaPedido() {
        $sql = " SELECT LAST_INSERT_ID() AS pedido; ";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;
        foreach ($_SESSION['carrito'] as $elemento) {
            $producto = $elemento['producto'];
            $insert = "CALL sp_insertar_linea_pedidos(0, {$pedido_id}, {$producto->id}, {$elemento['unidades']});";
            $save = $this->db->query($insert);
            $update = "CALL sp_actualizar_stock_producto({$elemento['unidades']},{$producto->id})";
            $up = $this->db->query($update);
        }
        $result = false;
        if ($save) {
            $result = TRUE;
        }
        return $result;
    }

    function getIdLastPedido() {
        $sql = "SELECT LAST_INSERT_ID() AS pedido; ";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;
        return $pedido_id;
    }

    function getByUser() {
        $sql = " CALL sp_mostrar_getbyUser({$this->getUsuario_id()})";
        $pedido = $this->db->query($sql);
        $pedido = $pedido->fetch_object();
        return $pedido;
    }

    function getAllByUser() {
        $sql = " CALL sp_mostrar_AllbyUser({$this->getUsuario_id()})";
        $pedido = $this->db->query($sql);
        return $pedido;
    }

    function getOne() {
        $sql = " CALL sp_mostrar_pedido({$this->getId()})";
        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }

    function getProductosByPedido() {
        $sql = " CALL sp_mostrar_getProductosbyPedidos({$this->getId()})";
        $productoPedido = $this->db->query($sql);
        $r = $productoPedido;
        return $r;
    }

    function getAll() {
        $sql = " CALL sp_mostrar_todos_pedidos()";
        $pedido = $this->db->query($sql);
        $r = $pedido;
        return $r;
    }

    public function edit() {
        $sql = "CALL sp_actualizar_pedidos('{$this->getEstado()}',{$this->getId()})";
        $editar = $this->db->query($sql);
        $result = FALSE;
        if ($editar) {
            $result = TRUE;
        }
        return $result;
    }
    public function eliminarlp() {
       $sql = "CALL sp_eliminar_lina_pedido({$this->getId()})";
       $eliminarlp=$this->db->query($sql);
        $result = FALSE;
        if($eliminarlp){
            $result = TRUE;
        }
        return $result;
    }
    public function eliminar() {
        $sql = "CALL sp_eliminar_pedido({$this->getId()})";
        $eliminar=$this->db->query($sql);
         $result = FALSE;
         if($eliminar){
             $result = TRUE;
         }
         return $result;
     }

    public function downStock() {
        $sql = " UPDATE productos SET stock = ";
    }
    

}

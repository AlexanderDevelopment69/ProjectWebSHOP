<?php
class Usuario {
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;
    public function __construct() {
        $this->db = database::connect();
    }
    function getId() {
        return $this->id;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getApellido() {
        return $this->apellido;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password = password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }
    function getRol() {
        return $this->rol;
    }
    function getImagen() {
        return $this->imagen;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    function setApellido($apellido) {
        $this->apellido = $this->db->real_escape_string($apellido);
    }
    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }
    function setPassword($password) {
        $this->password;
    }
    function setRol($rol) {
        $this->rol = $rol;
    }
    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    public function save() {
        $sql ="CALL sp_insertar_usuario('{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEmail()}', '{$this->getPassword()}')";
        $guardar = $this->db->query($sql);
        $result = false;
        if ($guardar) {
            $result = TRUE;
        }
        return $result;
    }
    public function login() {
        $result = FALSE;
        $email = $this->email;
        $password = $this->password;
       
        $sql= "CALL sp_login_usuario('$email')";
        $buscar = $this->db->query($sql);
//        var_dump($buscar->fetch_object());die();
        if ($buscar && $buscar->num_rows == 1) {
            $usuario = $buscar->fetch_object();
            $verify = password_verify($password, $usuario->password);
            if($verify){
               $result = $usuario;
            }
        }
        return $result;
    }
    public function getAll(){
        $sql = "CALL sp_mostrar_todos_usuarios()";
        $result = $this->db->query($sql);
        return $result;
    }
    public function edit() {

            $sql="CALL sp_actualizar_usuario('{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEmail()}', '{$this->getPassword()}',{$this->getId()})";
            $editar = $this->db->query($sql);
            $result = FALSE;
            if($editar){
                $result= TRUE;
            }
        return $result;
    }
    public function eliminar() {
        $sql = "CALL sp_eliminar_usuario({$this->getId()})";
        $eliminar = $this->db->query($sql);
        $result = FALSE;
        if($eliminar){
            $result = TRUE;
        }
        return $result;
    }
    public function getOne(){
        $sql = "SELECT * FROM usuarios WHERE id = {$this->getId()}; "; // no se me ocurre una idea :c
        $result = $this->db->query($sql);
        return $result->fetch_object();
    }
}
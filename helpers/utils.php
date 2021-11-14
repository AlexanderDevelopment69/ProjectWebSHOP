<?php
class Utils {
    public static function DeleteSession($session) {
        if (isset($_SESSION[$session])) {
            $_SESSION[$session] = NULL;
            unset($_SESSION[$session]);
        }
    }
    public static function ShowError($error) {
        $sError = '';
        if (isset($_SESSION['errores'][$error])) {
            $sError = '<p class=" my-2 btn-danger p-2 rounded">' . $error . ' incorrecto </p>';
        }
        return $sError;
    }
    public static function isAdmin() {
        if (!isset($_SESSION['admin'])) {
            header("location: " . base_url);
        }else{
            return TRUE;
        }
    }
     public static function showCategorias() {
         require_once 'models/CategoriasModels.php';
         $categ = new CategoriasModels();
         $catego = $categ->getAll();
         return $catego;
    }
    public static function showColores() {
        require_once 'models/CategoriasModels.php';
        $color = new CategoriasModels();
        $color = $color->getColores();
        return $color;
   }
   public static function showEstados() {
    require_once 'models/CategoriasModels.php';
    $estados = new CategoriasModels();
    $estados = $estados->getEstados();
    return $estados;
    }
    public static function showPagos() {
        require_once 'models/CategoriasModels.php';
        $estados = new CategoriasModels();
        $estados = $estados->getPagos();
        return $estados;
    }
public static function showMarca() {
    require_once 'models/CategoriasModels.php';
    $marca = new CategoriasModels();
    $marca = $marca->getMarca();
    return $marca;
}
public static function showProveedor() {
    require_once 'models/CategoriasModels.php';
    $proveedor = new CategoriasModels();
    $proveedor = $proveedor->getProveedor();
    return $proveedor;
}
public static function showTalla() {
    require_once 'models/CategoriasModels.php';
    $talla = new CategoriasModels();
    $talla = $talla->getTalla();
    return $talla;
}
    public static function statsCarrito(){
        $stats = array(
            'total' => 0,
            'cantidad' => 0
        );
        if(isset($_SESSION['carrito'])){
        $stats['cantidad'] = count($_SESSION['carrito']);
        foreach ($_SESSION['carrito'] as $producto) {
             $stats['total'] += $producto['precio'] * $producto['unidades'];
        }
       
        }
        return $stats;
    }
     public static function showEstado($estado){
         $value = 'pendiente';
         if($estado == 'confirmed'){
              $value = 'pendiente';
         }elseif($estado == 'preparation'){
             $value = 'En proceso';
         }elseif($estado == 'ready'){
             $value = 'Listo para enviar';
         }elseif($estado == 'sended'){
             $value = 'Enviado';
         }
         return $value;
     }
}
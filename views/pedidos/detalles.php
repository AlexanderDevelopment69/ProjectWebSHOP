<div class="row justify-content-center container-fluid">
    
    <div class="block-header">
        <h6 class="text-uppercase">Detalle de pedido</h6>
    </div>
</div>
<br><br>
<div class="container justify-content-center container-fluid ">
  <div class="row">
    
    <div class="col-sm-6">
        <h4 class="w-100 text-uppercase">Informacion envio</h4>
        <p class="w-100 text-left font-weight-bold">Dirección: <span class="font-weight-normal"><?= $pedido->departamento ?></span></p>
        <p class="w-100 text-left font-weight-bold">Referencia: <span class="font-weight-normal"><?= $pedido->municipio ?></span> </p>
        <p class="w-100 text-left font-weight-bold">Celular: <span class="font-weight-normal"><?= $pedido->direccion ?></span> </p>
    </div>
    <div class="col-sm-3">
        <h4 class="text-uppercase">Informacion</h4>
        <p class="w-100 text-left font-weight-bold ">Estado: <span class="font-weight-normal"><?= Utils::showEstado($pedido->estado)?></span></p>
        <p class="w-100 text-left font-weight-bold">Id pedido: <span class="font-weight-normal"><?= $pedido->id ?></span></p>
        <p class="w-100 text-left font-weight-bold">Total a pagar: <span class="font-weight-normal">S/. <?= $pedido->costo ?></span></p>
        <p class="w-100 text-left font-weight-bold">Productos:  </p>
    </div>
    <div class="col-sm-3">
        <?php if (isset($_SESSION['admin'])): ?>
        
        <h4 class="w-100 text-uppercase">estado pedido</h4>
    
        <div class="w-100 ">
            <form action="<?= base_url ?>Pedidos/edit" method="post" class=" row d-flex justify-content-center">
                <input type="hidden" name="id" value="<?= $pedido->id ?>" >
                <div class="form-group col-7">
                    <select name="estado" id="" class="form-control w-100">
                        <option value="confirmed" <?=$pedido->estado == "confirmed" ? 'selected' : ''?>>Pendiente</option>
                        <option value="preparation" <?=$pedido->estado == "preparation" ? 'selected' : ''?>>En proceso</option>
                        <option value="ready" <?=$pedido->estado == "ready" ? 'selected' : ''?>>Listo para enviar</option>
                        <option value="sended" <?=$pedido->estado == "sended" ? 'selected' : ''?>>Enviado</option>
                    </select>
                </div>
                <input type="submit" value="Cambiar estado" class="btn btn-outline-dark col-6">
            </form>
        </div>
        <?php endif; ?>
    </div>
  </div>
</div>
<table class="table table-hover container text-uppercase">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($productosPedido = $producto->fetch_object()) :?>
        
            <tr>
                <?php if ($productosPedido->imagen != NULL): ?>
                    <td><img  src="<?= base_url ?>uploads/images/<?= $productosPedido->imagen ?>" width="80" alt=""></td>
                <?php else: ?>
                    <td><img class="" width="80" src="<?= base_url ?>assets/img/camiseta.png" /></td>
                <?php endif; ?>
        <!--        <td><img src="<?= base_url ?>uploads/images/<?= $productosPedido->imagen ?>" alt="" width="80"</td>-->
                <td> <a> <?= $productosPedido->nombre ?></a></td>
                <td><?= $productosPedido->precio ?></td>
                <td><?= $productosPedido->unidades ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<div class="row justify-content-center container-fluid">
    
    <div class="block-header">
        <h6 class="text-uppercase">Metodos de pago</h6>
    </div>
</div>
<br><br>
<div class=" container justify-content-center container-fluid text-uppercase">
    <div class="row">
        <div class="col-sm ">
            <h4 class="w-100 text-center">Yape</h4>
            <h6 class="w-100  text-danger">AL MOMENTO DE HACER EL PAGO ESPECIFICAR</h6>
            <span class ="text-info ">ID: <?= $pedido->id?></span><br>
            <span class ="text-info">CELULAR: <?= $pedido->direccion?></span>
            <img src="../uploads/map.png">
        </div>
        <div class="col-sm">
            <h4 class="text-center">ENVIO DE PAGO</h4>
            <a href="https://api.whatsapp.com/send/?phone=+51982126861&text=Hola+Miguel+,necesito+ayuda+con+mi+computadora+%3Ac&app_absent=0"><input type="submit" value="Enviar Pago Whatsapp" class="btn btn-outline-dark col-12 "></a>
        </div>
        <div class="col-sm">
            <h4 class="w-100 text-center">Estado de pago</h4>
            <span>Actualmente : </span><?php echo $pedido->pago?>
            <?php if (isset($_SESSION['admin'])): ?>
                <div class="w-100 ">
                    <form action="<?= base_url ?>Pedidos/pago" method="post">
                        <input type="hidden" name="id" value="<?= $pedido->id ?>" >
                            <div class="form-group col-7">
                                <select name="pago" id="" class="form-control col-12">
                                    <option value="pendiente" <?=$pedido->pago == "pendiente" ? 'selected' : ''?>>Pendiente</option>
                                    <option value="pagado" <?=$pedido->pago == "pagado" ? 'selected' : ''?>>Pagado</option>
                                </select>
                            </div>
                        <input type="submit" value="Cambiar pago" class="btn btn-outline-dark col-md">
                    </form>
                </div>
                <?php endif; ?>
            
        </div>
  </div>
</div>
<br><br>
<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'confirmet'): ?>
    <div class="row justify-content-center">
    <div class="col-lg-5">
    <div class="block-header">
        <h6 class="text-uppercase">Su pedido ah sido confirmado</h6>
    </div>
    <!--<p> Por favor realice el pago a la cuenta bancaria xxxxxxxxxxxxxxxxxx para que su pedido sea procesado y enviado!! </p>-->

    <p class="w-100 text-left font-weight-bold">Id pedido: <?= $pedido->id ?></p>
    <p class="w-100 text-left font-weight-bold">Total a pagar: <?= $pedido->costo ?></p>
    <p class="w-100 text-left font-weight-bold">Productos: </p>

    <table class="table">
        <tr class="table-header">
            <th>imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
        <?php while  ($productoPedido = $producto->fetch_object()) : ?>
            <tr class="table-body">
                <?php if ($productoPedido->imagen != NULL): ?>
                    <td><img  src="<?= base_url ?>uploads/images/<?= $productoPedido->imagen ?>" width="80" alt=""></td>
                <?php else: ?>
                    <td><img class="" width="80" src="<?= base_url ?>assets/img/camiseta.png" /></td>
                <?php endif; ?>
        <!--        <td><img src="<?= base_url ?>uploads/images/<?= $productoPedido->imagen ?>" alt="" width="80"</td>-->
                <td> <a href="<?= base_url ?>Productos/ver&id=<?= $productoPedido->id ?>"> <?= $productoPedido->nombre ?></a></td>
                <td><?= $productoPedido->precio ?></td>
                <td><?= $productoPedido->unidades ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
                </div></div>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'failet'): ?>
    <h3 class="w-100">su pedido No puede ser realizado</h3>
    <p> Por favor revise sus datos para verificar posibles errores!! </p>

<?php endif; ?>
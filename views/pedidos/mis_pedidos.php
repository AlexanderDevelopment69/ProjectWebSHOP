<?php if (isset($_SESSION['admin'])): ?>
    <h3 class="w-100">Gestionar pedidos</h3>
<?php else: ?>
    <h3 class="w-100">Mis pedidos</h3>
<?php endif; ?>

<?php if ($pedidos->num_rows != 0): ?>
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <table class="table table-borderless table-hover table-responsive-md" id="tabla">
            <thead class="bg-light">
                <tr>
                    <th class="py-4 text-uppercase text-sm">Id pedido</th>
                    <th class="py-4 text-uppercase text-sm">Costo</th>
                    <th class="py-4 text-uppercase text-sm">Fecha</th>
                    <th class="py-4 text-uppercase text-sm">Pedido</th>
                    <th class="py-4 text-uppercase text-sm">Acción</th>
                </tr>
            </thead>
            <?php while ($ped = $pedidos->fetch_object()): ?>

                <tr class="table-body">
                    <td class="py-4 align-middle"><a href="<?= base_url ?>pedidos/detalles&id=<?= $ped->id ?>"><?= $ped->id ?> </a></td>
                    <td class="py-4 align-middle"><a href="<?= base_url ?>pedidos/detalles&id=<?= $ped->id ?>">S/. <?= $ped->costo ?> </a></td>
                    <td class="py-4 align-middle"><a href="<?= base_url ?>pedidos/detalles&id=<?= $ped->id ?>"><?= $ped->fecha ?></a></td>
                    <td class="py-4 align-middle"><a href="<?= base_url ?>pedidos/detalles&id=<?= $ped->id ?>"><?= Utils::showEstado($ped->estado) ?></a></td>
                    <td class="py-4 align-middle" class="py-4 align-middle">
                        <a class="btn btn-outline-danger btn-sm" href="<?= base_url ?>pedidos/eliminar&id=<?= $ped->id ?>" role="button">Eliminar</a>
                    </td>
                </tr>

            <?php endwhile; ?>
        </table>
    </div></div></div>
    <script>
  var tabla = document.querySelector("#tabla");
  var dataTable = new DataTable(tabla);
</script>

<?php else: ?>
    <p>No tienes historial de pedidos</p>
<?php endif; ?>
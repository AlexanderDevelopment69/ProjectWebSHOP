<?php if (isset($_SESSION['identity'])): ?>
    <?php if (isset($_SESSION['carrito'])): ?>

        
        <?php echo isset($_SESSION['errores']) ? Utils::ShowError('general') : '' ?>
        
        <div class="row justify-content-center">
        <div class="col-lg-5">
        <div class="block-header">
            <h6 class="text-uppercase">Finalizar Pedido | HUANCAYO</h6>
        </div>
        <form action="<?= base_url ?>Pedidos/save" method="post" >
            <div class="mb-4 ">
                <label class="form-label" for="departamento">Dirección: </label>
                <input class="form-control" type="text" name="departamento" placeholder="Ejem. Av Calmell del Solar #580 " required class="form-control" >
                <?php echo isset($_SESSION['errores']) ? Utils::ShowError('departamento') : '' ?>
            </div>
            <div class="mb-4 ">
                <label class="form-label" for="municipio">Referencia: </label>
                <input class="form-control" type="text" name="municipio" placeholder="Ejem. A dos cuadras del parque constitución" required class="form-control" >
                <?php echo isset($_SESSION['errores']) ? Utils::ShowError('municipio') : '' ?>

            </div>
            <div class="mb-4">
                <label class="form-label"for="direccion">Celular: </label>
                <input class="form-control" type="text" name="direccion" placeholder="Ejem 999999999" required class="form-control" >
                <?php echo isset($_SESSION['errores']) ? Utils::ShowError('direccion') : '' ?>

            </div>
            <a  class="w-100" href="<?= base_url ?>Carrito/index">Ver información de pedido</a>
            <div class="mb-4 text-center">
                    <button class="btn btn-outline-dark" type="submit"><i class="far fa-save"></i>Confirmar</button>
            </div>
            <?php Utils::DeleteSession('errores') ?>
            
        </form>
    </div>
    </div>
        
    <?php else: ?>
        <h3 class="w-100"> Debes agregar algun producto al carrito</h3>
        <p class="w-100">Ve al inicio de la pagina y agrega algun producto al carrito <a href="<?= base_url ?>">aqui</a></p>
    <?php endif; ?>
<?php else: ?>
    <h3 class="w-100"> Debes registrarte para finalizar el pedido</h3>
    <p class="w-100">Regitrate y termina tú pedido </p>
    <p class="w-100">Registrate <a href="<?= base_url ?>Usuarios/registrar">aqui</a></p>
<?php endif; ?>

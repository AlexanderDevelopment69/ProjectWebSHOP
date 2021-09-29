<h2 class="w-100">Registrarse</h2>
<?php
if (isset($_SESSION['register'])):
    if ($_SESSION['register'] == 'complete'):
        ?>
        <span class="mt-3 btn-success p-2 rounded">Usuario registrado correctamente </span>
    <?php elseif ($_SESSION['register'] == 'failed'): ?>
        <span class="mt-3 btn-danger p-2 rounded">Usuario no se pudo registrar </span>
        <?php
    endif;
endif;
?>
<?php Utils::DeleteSession('register') ?>
<form action="<?= base_url ?>usuarios/save" method="post" class="d-flex justify-content-around flex-wrap text-left mt-5">
    <div class="form-group mx-2 col-5">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre" required class="form-control" >
<?php echo isset($_SESSION['errores']) ? Utils::ShowError('nombre') : '' ?>
    </div>
    <div class="form-group mx-2 col-5">
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" placeholder="Apellido" required class="form-control" >
<?php echo isset($_SESSION['errores']) ? Utils::ShowError('apellido') : '' ?>

    </div>
    <div class="form-group mx-2 col-5">
        <label for="correo">Correo: </label>
        <input type="email" name="correo" placeholder="Correo" required class="form-control" >
<?php echo isset($_SESSION['errores']) ? Utils::ShowError('correo') : '' ?>

    </div>
    <div class="form-group mx-2 col-5">
        <label for="contraseña">Contraseña: </label>
        <input type="password" name="contraseña" placeholder="contraseña" required class="form-control" >
        
        <?php echo isset($_SESSION['errores']) ? Utils::ShowError('contraseña') : '' ?>

    </div>

    <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
        <div class="w-100">
            <img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" alt="" width="100">
        </div>
    <?php endif; ?>
    <div class="form-group col-6">
        <label for="foto" class="w-100">Ingresar una imagen</label>
        <input type="file" name="foto"  class="form-control ">
    </div>

    
    <input type="submit" value="Guardar " class="btn btn-success col-6">
    <?php Utils::DeleteSession('errores')?>
</form>

        <div class="col-lg-5">
            <div class="block">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Registrarse</h6>
              </div>
              <div class="block-body">
                <form action="<?= base_url ?>usuarios/save" method="post">
                  <div class="mb-4">
                    <label class="form-label" for="nombre">Nombres</label>
                    <input class="form-control" name="nombre" id="nombre" type="text">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('nombre') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="name">Apellidos</label>
                    <input class="form-control"  name="apellido" id="name" type="text">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('apellido') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="correo">Correo</label>
                    <input class="form-control" name="correo"id="correo" type="email">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('correo') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" name="contraseña" id="contraseña" type="password">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('contraseña') : '' ?>
                  </div>
          
                  <div class="mb-4 text-center">
                    <button class="btn btn-outline-dark" type="submit"><i class="far fa-user me-2"></i>Registrarse</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
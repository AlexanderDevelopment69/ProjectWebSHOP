
<?php
if (isset($_SESSION['register'])):
    if ($_SESSION['register'] == 'complete'):
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
      </svg>
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>Usuario registrado correctamente</div>
      </div>
      
    <?php elseif ($_SESSION['register'] == 'failed'): ?>
        <span class="mt-3 btn-danger p-2 rounded">Usuario no se pudo registrar </span>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div> Usuario no se pudo registrar </div>
          </div>
        <?php
    endif;
endif;
?>
<?php Utils::DeleteSession('register') ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="block">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Registrarse</h6>
              </div>
              <div class="block-body">
              <?php if (isset($_GET['id'])): ?>
                <?php $url_action = base_url . 'usuarios/save&id=' . $usu->id ?>
                <?php else: ?>
                  <?php $url_action = base_url . 'usuarios/save' ?>
                  <?php endif; ?>
                <form action="<?= $url_action ?>" enctype="multipart/form-data" method="post" class="row d-flex justify-content-around">
                  <div class="mb-4">
                    <label class="form-label" for="nombre">Nombres</label>
                    <input class="form-control" value="<?= isset($usu) && is_object($usu) ? $usu->nombre : '' ?>" name="nombre" id="nombre" type="text">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('nombre') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="name">Apellidos</label>
                    <input class="form-control"  value="<?= isset($usu) && is_object($usu) ? $usu->apellido : '' ?>" name="apellido" id="name" type="text">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('apellido') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="correo">Correo</label>
                    <input class="form-control" value="<?= isset($usu) && is_object($usu) ? $usu->email : '' ?>" name="correo"id="correo" type="email">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('correo') : '' ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" value="<?= isset($usu) && is_object($usu) ? $usu->password : '' ?>" name="contraseña" id="contraseña" type="password">
                    <?php echo isset($_SESSION['errores']) ? Utils::ShowError('contraseña') : '' ?>
                  </div>
          
                  <div class="mb-4 text-center">
                    <button class="btn btn-outline-dark" type="submit"><i class="far fa-user me-2"></i>Registrarse</button>
                    
                    <a href="<?= base_url ?>usuarios/inicio" class="btn btn-outline-primary" type="submit"><i class="far fa-user me-2"></i>Iniciar Sesión</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
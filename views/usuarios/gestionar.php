<?php if (isset($_SESSION['admin'])): ?>
<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Gestion de Usuarios</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Gestion de Usuarios</h1>
          <div class="row">   
            
            <a class="btn btn-outline-dark btn-sm " href="<?= base_url ?>Usuarios/perfil" role="button">OPCIONES ADMINISTRADOR</a>
            <a class="btn btn-outline-danger btn-sm " href="<?= base_url ?>Usuarios/registrar" role="button">Crear nuevo Usuario</a>
            
          </div>
        </div>
      </div>
</section>

<div class="container">
    <div class="row">
        
        <div class="col-sm-12">
            
                <table class="table table-borderless table-hover table-responsive-md" id="tabla">
                <thead class="bg-light">
                    <tr>
                    <th class="py-4 text-uppercase text-sm">ROL</th>
                    <th class="py-4 text-uppercase text-sm">NOMBRE</th>
                    <th class="py-4 text-uppercase text-sm">APELLIDO</th>
                    <th class="py-4 text-uppercase text-sm">CORREO</th>
                    <th class="py-4 text-uppercase text-sm">CONTRASEÑA</th>
                    <th class="py-4 text-uppercase text-sm">ACCION</th>
                    </tr>
                </thead>
                <tbody>
                   <?PHP while ($usu = $usuario->fetch_object()): ?>
                  <tr>
                        <td class="py-4 align-middle"><?= $usu->rol; ?></td>
                        <td class="py-4 align-middle"><?= $usu->nombre; ?></td>
                        <td class="py-4 align-middle"><?= $usu->apellido; ?></td>
                        <td class="py-4 align-middle"><?= $usu->email; ?></td>
                        <td class="py-4 align-middle"><input readonly type ="password" class="form-control-plaintext" value="<?= $usu->password; ?>"></td>

                        <td class="py-4 align-middle">
                            <a class="btn btn-outline-primary btn-sm" href="<?= base_url ?>usuarios/edit&id=<?= $usu->id ?>" role="button">Editar</a>
                            <a class="btn btn-outline-danger btn-sm" href="<?= base_url ?>usuarios/eliminar&id=<?= $usu->id ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                
                </tbody>
                </table>
            </div>
            
    </div>
</div>
<script>
  var tabla = document.querySelector("#tabla");
  var dataTable = new DataTable(tabla);
</script>
<?php endif ; ?>
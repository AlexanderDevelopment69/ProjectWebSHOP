<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Gestion de Categorias</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Gestion de Categorias</h1>
          <div class="row">   
            
            <a class="btn btn-outline-dark btn-sm " href="<?= base_url ?>Usuarios/perfil" role="button">OPCIONES ADMINISTRADOR</a>
            <a class="btn btn-outline-danger btn-sm " href="<?= base_url ?>Categorias/crear" role="button">Crear Categoria</a>
            
          </div>
        </div>
      </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            
                <table class="table table-borderless table-hover table-responsive-md">
                <thead class="bg-light">
                    <tr>
                    <th class="py-4 text-uppercase text-sm">ID</th>
                    <th class="py-4 text-uppercase text-sm">NOMBRE</th>
                    <th class="py-4 text-uppercase text-sm">ACCION</th>
                    </tr>
                </thead>
                <tbody>
                <?PHP while ($cat = $categorias->fetch_object()): ?>
                    <tr>
                        <td class="py-4 align-middle"><?= $cat->id; ?></td>
                        <td class="py-4 align-middle"><?= $cat->nombre; ?></td>
                        <td class="align-middle">
                            <a class="btn btn-outline-primary btn-sm" href="<?= base_url ?>Categorias/edit&id=<?= $cat->id ?>" role="button">Editar</a>
                            <a class="btn btn-outline-danger btn-sm" href="<?= base_url ?>Categorias/eliminar&id=<?= $cat->id ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                
                </tbody>
                </table>
            </div>
            <div class="col-sm-2"></div>
    </div>
</div>
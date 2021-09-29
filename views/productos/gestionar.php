<?php if (isset($_SESSION['admin'])): ?>
<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Gestion de Productos</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Gestion de Productos</h1>
          <div class="row">   
            
            <a class="btn btn-outline-dark btn-sm " href="<?= base_url ?>Usuarios/perfil" role="button">OPCIONES ADMINISTRADOR</a>
            <a class="btn btn-outline-danger btn-sm " href="<?= base_url ?>Productos/crear" role="button">Crear Producto</a>
            
          </div>
        </div>
      </div>
</section>

<div class="container">
    <div class="row">
        
        <div class="col-sm-12">
            
                <table class="table table-borderless table-hover table-responsive-md">
                <thead class="bg-light">
                    <tr>
                    <th class="py-4 text-uppercase text-sm">ID</th>
                    <th class="py-4 text-uppercase text-sm">NOMBRE</th>
                    <th class="py-4 text-uppercase text-sm">PRECIO</th>
                    <th class="py-4 text-uppercase text-sm">STOCK</th>
                    <th class="py-4 text-uppercase text-sm">IMAGEN</th>
                    <th class="py-4 text-uppercase text-sm">ACCION</th>
                    </tr>
                </thead>
                <tbody>
                <?PHP while ($pro = $productos->fetch_object()): ?>
                    <tr>
                        <td class="py-4 align-middle"><?= $pro->id; ?></td>
                        <td class="py-4 align-middle"><?= $pro->nombre; ?></td>
                        <td class="py-4 align-middle"><?= $pro->precio; ?></td>
                        <td class="py-4 align-middle"><?= $pro->stock; ?></td>
                        <td class="py-4 align-middle"><img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" alt="" width="50"></td>

                        <td class="py-4 align-middle">
                            <a class="btn btn-outline-primary btn-sm" href="<?= base_url ?>Productos/edit&id=<?= $pro->id ?>" role="button">Editar</a>
                            <a class="btn btn-outline-danger btn-sm" href="<?= base_url ?>Productos/eliminar&id=<?= $pro->id ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                
                </tbody>
                </table>
            </div>
            
    </div>
</div>
<?php endif ; ?>
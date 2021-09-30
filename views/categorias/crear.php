<?php if (isset($_SESSION['admin'])): ?>
    <!-- Hero Section-->
<section class="hero">
<div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Agregar Categoria</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Agregar Nueva Categoria</h1>
          <div class="row">
          <a class="btn btn-outline-dark btn-sm " href="<?= base_url ?>Usuarios/perfil" role="button">OPCIONES ADMINISTRADOR</a>
            <a class="btn btn-outline-success btn-sm " href="<?= base_url ?>Categorias/index" role="button">Ver Categorias</a>
          </div>
        </div>
      </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="block">
                    
                    <div class="block-body">
                        
                    <?php if (isset($_GET['id'])): ?>
                        <?php $url_action = base_url . 'Categorias/save&id=' . $cat->id ?>
                        <?php else: ?>
                            <?php $url_action = base_url . 'Categorias/save' ?>
                    <?php endif; ?>

                    <form action="<?= $url_action ?>" method="post">
                        <div class="form-group">
                            <label for="nombre" class="w-100">Nombre de categoria</label>
                            <input type="text" value="<?= isset($cat) && is_object($cat) ? $cat->nombre : '' ?>" name="nombre" placeholder="Ingrese categoria" required class="form-control ">
                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" value="Guardar Categoria" class="btn btn-outline-dark">
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ; ?>



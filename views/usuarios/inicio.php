        <!-- Hero Section-->
<section class="hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?= base_url ?>">Inicio</a></li>
            <li class="breadcrumb-item active">zona Usuarios</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <h1 class="hero-heading mb-0">Zona Usuarios</h1>
        </div>
    </div>
</section>
    <!-- customer login-->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="block">
                    <div class="block-header">
                        <h6 class="text-uppercase mb-0">Iniciar Sesión</h6>
                    </div>
                    <div class="block-body">
                        <?php if (!isset($_SESSION['identity'])): ?>
                            <form action="<?= base_url ?>Usuarios/login" method="post">
                                <div class="mb-4 form-group">
                                    <label class="form-label" for="email">Correo</label>
                                    <input required class="form-control" name="email" id="email" type="email">
                                </div>
                                <div class="mb-4 form-group">
                                    <label class="form-label" for="password">Contraseña</label>
                                    <input required class="form-control" name="password" id="password" type="password">
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                    </label>
                                </div>
                                <div class="mb-4 text-center">
                                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt me-2"></i> Ingresar</button>
                                    <a href="<?= base_url ?>usuarios/registrar" class="btn btn-outline-dark" type="submit"><i class="far fa-user me-2"></i>Registrarse</a>
                                </div>
                        <?php else : header("location: " . base_url."usuarios/perfil");?>
                            
                    <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>


   
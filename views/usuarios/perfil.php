<!-- Hero Section-->
<section class="hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="<?= base_url ?>">Inicio</a></li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
        <!-- Hero Content-->

      </div>
</section>

<section>
    <div class="container">
    
    <div class="row">
          <!-- Customer Sidebar-->
          <div class="col-sm-2"></div>
          <div class="col-sm-8 ">
              <div class="customer-sidebar card border-0">
                  <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image shadow" src="https://cdn2.vectorstock.com/i/1000x1000/20/76/man-avatar-profile-vector-21372076.jpg" alt=""></a>
                  <h5 class="border-bottom mb-3 pb-3"> <?= $_SESSION['identity']->nombre ?></h5>
                  <p class="text-muted text-sm mb-0"><?= $_SESSION['identity']->apellido ?></p>
                </div>
                <nav class="list-group customer-nav"><a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?= base_url ?>Carrito/index"><span>
                    <svg class="svg-icon svg-icon-heavy me-2">
                      <use xlink:href="#paper-bag-1"> </use>
                    </svg>Mi carrito</span>
                    <?php $stats = Utils::statsCarrito() ?>
                    <div class="badge rounded-pill bg-dark fw-normal px-3"><?=$stats['cantidad']?></div>
                    <div class="badge rounded-pill bg-dark fw-normal px-3">S/. <?=$stats['total']?></div>
                </a>
                <a class="active list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?= base_url ?>Carrito/index">
                <span><svg class="svg-icon svg-icon-heavy me-2"><use xlink:href="#male-user-1"> </use></svg>Profile</span>

                </a>
 
            <!-- solo usuarios admin -->
            <?php if (isset($_SESSION['admin'])): ?>
                <a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?= base_url ?>categorias/index">
                    <span><i class="fas fa-align-justify"></i><svg class="svg-icon svg-icon-heavy me-2"></svg>Gestionar Categorias</span>
                </a>

                <a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?= base_url ?>productos/gestionar">
                    <span><i class="fas fa-cart-plus"></i><svg class="svg-icon svg-icon-heavy me-2"></svg>Gestionar Productos</span>
                </a>

                <a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?=base_url?>Pedidos/gestionar_pedidos">
                    <span><i class="fas fa-shipping-fast"></i><svg class="svg-icon svg-icon-heavy me-2"></svg>Gestionar Pedidos</span>
                </a>

            <!--fin solo usuarios admin-->
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])): ?>
            <a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?=base_url?>Pedidos/mis_pedidos"><span>
            
                <svg class="svg-icon svg-icon-heavy me-2">
                    <use xlink:href="#delivery-time-1"> </use>
                </svg>Historial Pedidos</span>
            </a>
            <a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="<?= base_url ?>usuarios/logout"><span>
                <svg class="svg-icon svg-icon-heavy me-2">
                    <use xlink:href="#exit-1"> </use>
                </svg>Cerrar Sesion</span>
            </a>
                    <?php endif; ?>
                    </nav>
                </div>
            </div>
            <!-- /Customer Sidebar-->
        </div>
        <div class="col-sm-2"></div>
        
        </div>
    </div>
</section>
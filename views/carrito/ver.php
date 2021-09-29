<?php $stats = Utils::statsCarrito() ?>
<?php print_r($stats);?>

<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Carrito de Compras</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Carrito de compras</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Usted tiene <?= $stats['cantidad']?> productos agregados en el carrito.</p></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section-->
    <section>
      <div class="container">
        <div class="row mb-5"> 
          <div class="col-lg-8">
            <div class="cart">
              <div class="cart-wrapper">
                <div class="cart-header text-center">
                  <div class="row">
                    <div class="col-5">Item</div>
                    <div class="col-2">Precio</div>
                    <div class="col-2">Cantidad</div>
                    <div class="col-2">Total</div>
                    <div class="col-1"></div>
                  </div>
                </div>
                <div class="cart-body">

                <?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>

                    <?php foreach ($_SESSION['carrito'] as $indice => $elemento) : { $producto = $elemento['producto'];}?>
                  <!-- Product-->
                  <div class="cart-item">
                      <div class="row d-flex align-items-center text-center">
                          <div class="col-5">
                              <div class="d-flex align-items-center"><a href="detail.html"><img class="cart-item-img" src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" alt="#"></a>
                              <div class="cart-title text-start">
                                  <a class="text-uppercase text-dark" href="detail.html"><strong><?= $producto->nombre ?></strong></a>
                                  <br><span class="text-muted text-sm"><?= $producto->descripcion ?></span><br>
                                  <span class="text-muted text-sm"><?= $producto->nombre ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"><?= $producto->precio ?></div>

                        <div class="col-2">
                            <div class="d-flex align-items-center">
                                <a href="<?= base_url ?>Carrito/down&index=<?=$indice?>" class="btn btn-items btn-items-decrease">-</a>
                                <input class="form-control text-center input-items" type="text" value="<?= $elemento['unidades'] ?>">
                                <a href="<?= base_url ?>Carrito/up&index=<?=$indice?>" class="btn btn-items btn-items-increase">+</a>
                            </div>
                        </div>
                        <div class="col-2 text-center"><?php print ($producto->precio * $elemento['unidades'])?></div>
                        <div class="col-1 text-center"><a class="cart-remove" href="<?= base_url ?>Carrito/remove&index=<?=$indice?>"> <i class="fa fa-times"></i></a></div>
                    </div>
                </div>
                
                  <!-- Product-->
                  <?php endforeach; ?>
                  <?php else: ?>
                    <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">No tienes ningun producto seleccionado</p></div>
                <?php endif; ?>

                </div>
              </div>
            </div>
            <div class="my-5 d-flex justify-content-between flex-column flex-lg-row">
            
                <a class="btn btn-link text-muted" href="<?= base_url ?>"><i class="fa fa-chevron-left"></i>Continuar Comprando</a>
                <a class="btn btn-outline-dark" href="#">Total S/<?= $stats['total'] ?> nuevos soles.</a>
                <a class="btn btn-dark" href="<?= base_url ?>Pedidos/hacer">Procesar Pedido <i class="fa fa-chevron-right"></i></a>
              </div>
          </div> 
        </div>
      </div>
    </section>



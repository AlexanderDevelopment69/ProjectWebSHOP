<!-- Seccion de productos random-->

<section class="my-5">
    <div class="container">
        <header class="text-center">
          <h6 class="text-uppercase mb-5">categoria</h6>
          <h6 class="text-uppercase mb-5">-</h6>
          <h3 class="w-100 mb-5 text-uppercase text-center"><?= $cate->nombre ?></h3>
        </header>
        <div class="row">
            <!--Producto-->
            <?php foreach($productos as $producto){ ?>
                
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product">
                        <div class="product-image">
                            <img class="img-fluid" src="<?= base_url ?>uploads/images/<?php echo $producto['imagen']; ?>" alt="product"/>
                            <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                            <!--Overlay en imagen-->
                            <div class="product-hover-overlay-buttons">
                                <a class="btn btn-dark btn-buy" href="<?= base_url ?>Productos/ver&id=<?= $producto['id'] ?>"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                            </div>
                            <!--Fin Overlay en imagen-->
                        </div>
                    </div>
                    <div>
                        <!--Datos de producto -->
                        <div class="py-2">
                            <p class="text-muted text-sm mb-1"><?php echo $producto['stock']; ?> Articulos.</p>
                            <h3 class="h6 text-uppercase mb-1">
                                <a class="text-dark" href="detail.html"><?php echo $producto['nombre']; ?></a>
                            </h3>
                            <span class="text-muted">S/. <?php echo $producto['precio'];?></span>
                        </div>
                        <!--Fin Datos de producto -->
                    </div>
                </div>
            </div>
            <?php } ?>
            <!--Fin Producto-->
        </div>
    </div>
</section>

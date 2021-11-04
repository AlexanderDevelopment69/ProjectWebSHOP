
      <!-- Fullscreen search area-->
      <div class="search-area-wrapper">
        <div class="search-area d-flex align-items-center justify-content-center">
          <div class="close-btn">
            <svg class="svg-icon svg-icon-light w-3rem h-3rem">
              <use xlink:href="#close-1"> </use>
            </svg>
          </div>
          <form class="search-area-form" action="#">
            <div class="mb-4 position-relative">
              <input class="search-area-input" type="search" name="search" id="search" placeholder="What are you looking for?">
              <button class="search-area-button" type="submit">
                <svg class="svg-icon">
                  <use xlink:href="#search-1"> </use>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Fullscreen search area-->
    </header>
    <section class="product-details">
      <div class="container">
        <div class="row">
        <?php if ($produc->imagen != NULL): ?>
          <div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1"><a class="glightbox d-block mb-4" href="<?= base_url ?>uploads/images/<?= $produc->imagen ?>" data-title="Modern Jacket 1 - Caption text" data-gallery="product-gallery">
              <div data-bs-toggle="zoom" data-image="<?= base_url ?>uploads/images/<?= $produc->imagen ?>">
              <img class="img-fluid" src="<?= base_url ?>uploads/images/<?= $produc->imagen ?>" alt="Modern Jacket 1"></div></a>
              <a class="glightbox d-block mb-4" href="<?= base_url ?>uploads/images/<?= $produc->imagen ?>" data-title="Modern Jacket 2 - Caption text" data-gallery="product-gallery"> 
            </div>
          <?php endif; ?>
          <div class="col-lg-6 col-xl-5 ps-lg-5 pt-4 order-1 order-lg-2">
            <ul class="breadcrumb justify-content-start">
              <li class="breadcrumb-item"><a href="<?= base_url ?>"></a></li>Inicio
              <li class="breadcrumb-item"><a href="<?= base_url ?>Categorias/ver&id=<?= $produc->categoria_id?>"><?= $cate->nombre?></a></li>
              <li class="breadcrumb-item active"><?= $produc->nombre?></li>
            </ul>
            <div class="sticky-top" style="top: 100px;">
              <h1 class="h2 mb-4 text-uppercase"><?= $produc->nombre?></h1>
              <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                <ul class="list-inline mb-2 mb-sm-0">
                  <li class="list-inline-item h4 fw-light mb-0">S/. <?= $produc->oferta?></li>
                  <li class="list-inline-item text-muted fw-light"> 
                    <del>S/. <?= $produc->precio?></del>
                  </li>
                </ul>
                <div class="d-flex align-items-center">
                  <ul class="list-inline me-2 mb-0">
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                    <li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
                  </ul>
                </div>
              </div>
              <p class="mb-4 text-muted"><?= $produc->descripcion?></p>
              <form action="#">
                <div class="row">
                  <div class="col-sm-6 col-lg-12 detail-option mb-3">
                    <h6 class="detail-option-heading">Talla <span>*</span></h6>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_0"> S
                      <input class="input-invisible" type="radio" name="size" value="value_0" id="size_0" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_1"> M
                      <input class="input-invisible" type="radio" name="size" value="value_1" id="size_1" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_2"> L
                      <input class="input-invisible" type="radio" name="size" value="value_2" id="size_2" required>
                    </label>
                    <label class="btn btn-sm btn-outline-secondary detail-option-btn-label" for="size_2"> XL
                      <input class="input-invisible" type="radio" name="size" value="value_2" id="size_2" required>
                    </label>
                  </div>
                  <div class="col-12 detail-option mb-3">
                    <h6 class="detail-option-heading">Color <span>*</span></h6>
                    <ul class="list-inline mb-0 colours-wrapper">
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Blue" style="background-color: #668cb9"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Blue" id="colour_Blue" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_White" style="background-color: #fff"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_White" id="colour_White" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Violet" style="background-color: #8b6ea4"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Violet" id="colour_Violet" required>
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Red" style="background-color: #dd6265"> </label>
                        <input class="input-invisible" type="radio" name="colour" value="value_Red" id="colour_Red" required>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-6 detail-option mb-5">
                    <label class="detail-option-heading fw-bold">Cantidad <span>*</span></label>
                    <input class="form-control detail-quantity" name="items" type="number" value="1">
                  </div>
                </div>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="<?=base_url?>Carrito/add&id=<?=$produc->id?>" class="btn btn-dark btn-lg mb-1" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Agregar al carrito</a>
                  </li>
                  <li class="list-inline-item"><a class="btn btn-outline-secondary mb-1" href="#"> <i class="far fa-heart me-2"></i>Agregar a favoritos</a></li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Seccion de productos random-->
    <section class="my-5">
    <div class="container">
        <header class="text-center">
          <h6 class="text-uppercase mb-5">Algunos de nuestros Productos</h6>
        </header>
        <div class="row">
            <!--Producto-->
            <?php foreach($productito as $producto){ ?>
                <div class="col-lg-2 col-md-4 col-6">
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

                    
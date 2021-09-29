
    <!-- Hero Section-->
    <section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="<?= base_url ?>">Inicio</a></li>
          <li class="breadcrumb-item active">Tienda</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Market Lilli</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Los mejores precios en un solo lugar.</p></div>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <div class="px-xl-5">
        <div class="row">

          <!-- Grid -->
          <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
            <header class="product-grid-header">
              <div class="me-3 mb-3">
                 Mostrar <strong>1-12</strong>de <strong>158 </strong>productos</div>
              <div class="me-3 mb-3"><span class="me-2">Ver</span><a class="product-grid-header-show active" href="#">12</a>
              <a class="product-grid-header-show " href="#">24</a><a class="product-grid-header-show " href="#">Todos</a>
              </div>
              <div class="mb-3 d-flex align-items-center"><span class="d-inline-block me-2">Ordenar por</span>
                <select class="form-select w-auto border-0">
                  <option value="orderby_0">Nuevos</option>
                  <option value="orderby_1">Mayormente Comprados</option>
                  <option value="orderby_2">Populares</option>
                  <option value="orderby_3">Ninguno</option>
                </select>
              </div>
            </header>
            <div class="row">
                <!--Producto-->
                <?php foreach($producto as $producto){ ?>
                    <div class=" col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <figure class="text_align_center img-fluid"><img class="img-thumbnail" src="<?= base_url ?>uploads/images/<?php echo $producto['imagen']; ?>" alt="product"/></figure>
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                <!--Overlay en imagen-->
                                <div class="product-hover-overlay-buttons">
                                    <a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="<?=base_url?>Carrito/add&id=<?= $producto['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-dark btn-buy" href="<?= base_url ?>Productos/ver&id=<?= $producto['id'] ?>"><i class="fa-search fa"></i></a>
                                    <a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
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
                        <a class="btn btn-dark" href="<?= base_url ?>Productos/ver&id=<?= $producto['id'] ?>" role="button">Ver Producto</a>
                    </div>
                </div>
                <?php } ?>
                        <!--Fin Producto-->

              
            </div>
            <!-- Pagination-->
            <nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
              </ul>
            </nav>
          </div>
          <!-- / Grid End-->

          <!-- Sidebar-->
          <div class="sidebar col-xl-3 col-lg-4 pr-xl-5 order-lg-1">
            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories</a>
              <div class="expand-lg collapse" id="categoriesMenu">
                <div class="nav nav-pills flex-column mt-4 mt-lg-0"> <a class="nav-link d-flex justify-content-between mb-2 " href="#"><span>Categorias</span><span class="sidebar-badge"> 120</span></a>
                  <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#">Lorem ipsum</a><a class="nav-link mb-2" href="#">Dolor</a><a class="nav-link mb-2" href="#">Sit amet</a><a class="nav-link mb-2" href="#">Donec vitae</a>
                  </div><a class="nav-link d-flex justify-content-between mb-2 active" href="#"><span>Jeans &amp; chinos</span><span class="sidebar-badge"> 55</span></a>
                  <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#">Lorem ipsum</a><a class="nav-link mb-2" href="#">Dolor</a><a class="nav-link mb-2" href="#">Sit amet</a><a class="nav-link mb-2" href="#">Donec vitae</a>
                  </div><a class="nav-link d-flex justify-content-between mb-2 " href="#"><span>Accessories</span><span class="sidebar-badge"> 80</span></a>
                  <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#">Sit amet</a><a class="nav-link mb-2" href="#">Donec vitae</a><a class="nav-link mb-2" href="#">Lorem ipsum</a><a class="nav-link mb-2" href="#">Dolor</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu">Filter by price</a>
              <div class="expand-lg collapse" id="priceFilterMenu">
                <h6 class="sidebar-heading d-none d-lg-block">Price  </h6>
                <div class="mt-4 mt-lg-0" id="slider-snap"> </div>
                <div class="nouislider-values">
                  <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                  <div class="max">To $<span id="slider-snap-value-upper"></span></div>
                  <input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
                  <input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
                </div>
              </div>
            </div>
            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand</a>
              <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
              <div class="expand-lg collapse show" id="brandFilterMenu">
                <h6 class="sidebar-heading d-none d-lg-block">Brands </h6>
                <form class="mt-4 mt-lg-0" action="#"> 
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="brand0" type="checkbox" name="clothes-brand" checked>
                      <label class="form-check-label" for="brand0">Calvin Klein <small>(18)</small></label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="brand1" type="checkbox" name="clothes-brand" checked>
                      <label class="form-check-label" for="brand1">Levi Strauss <small>(30)</small></label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="brand2" type="checkbox" name="clothes-brand">
                      <label class="form-check-label" for="brand2">Hugo Boss <small>(120)</small></label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="brand3" type="checkbox" name="clothes-brand">
                      <label class="form-check-label" for="brand3">Tomi Hilfiger <small>(70)</small></label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="brand4" type="checkbox" name="clothes-brand">
                      <label class="form-check-label" for="brand4">Tom Ford  <small>(110)</small></label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#sizeFilterMenu" 
            aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size</a>
              
            <!-- Size filter menu-->
              <div class="expand-lg collapse" id="sizeFilterMenu"> 
                <h6 class="sidebar-heading d-none d-lg-block">Size </h6>
                <form class="mt-4 mt-lg-0" action="#">  
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="size0" type="radio" name="size" checked>
                      <label class="form-check-label" for="size0">Small</label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="size1" type="radio" name="size">
                      <label class="form-check-label" for="size1">Medium</label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="size2" type="radio" name="size">
                      <label class="form-check-label" for="size2">Large</label>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="form-check">
                      <input class="form-check-input" id="size3" type="radio" name="size">
                      <label class="form-check-label" for="size3">X-Large</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu">Filter by colour</a>
              <!-- Size filter menu-->

              <div class="expand-lg collapse" id="colourFilterMenu">
                <h6 class="sidebar-heading d-none d-lg-block">Colour </h6>
                <div class="mt-4 mt-lg-0"> 
                  <ul class="list-inline mb-0 colours-wrapper">
                    <li class="list-inline-item">
                      <label class="btn-colour" for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple> </label>
                      <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue">
                    </li>
                    <li class="list-inline-item">
                      <label class="btn-colour" for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple> </label>
                      <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White">
                    </li>
                    <li class="list-inline-item">
                      <label class="btn-colour" for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple> </label>
                      <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet">
                    </li>
                    <li class="list-inline-item">
                      <label class="btn-colour" for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple> </label>
                      <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- /Sidebar end-->

        </div>
      </div>
    </div>
    <!-- Quickview Modal    -->
    <div class="modal fade quickview" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <button class="close modal-close" type="button" data-bs-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-100 h-100 svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body"> 
            <div class="ribbon ribbon-primary">Sale</div>
            <div class="row">
              <div class="col-lg-6">
                <div class="owl-carousel owl-theme owl-dots-modern detail-full" data-slider-id="1">
                  <div class="detail-full-item-modal" style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/2-0/img/photo/kyle-loftus-596319-detail-1.jpg') no-repeat; background-size: cover;">  </div>
                 </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center">
                <div>
                  <h2 class="mb-4 mt-4 mt-lg-1"><?php echo $producto['nombre']; ?></h2>
                  <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                    <ul class="list-inline mb-2 mb-sm-0">
                      <li class="list-inline-item h4 fw-light mb-0">S/ <?php echo $producto['precio']; ?></li>
                      <li class="list-inline-item text-muted fw-light"> 
                        <del>S/ <?php echo $producto['precio']; ?></del>
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
                  <p class="mb-4 text-muted"><?php echo $producto['descripcion']; ?></p>
                  <form action="#">
                    <div class="row">
                      <div class="col-sm-6 col-lg-12 detail-option mb-3">
                        <h6 class="detail-option-heading">Talla<span>*</span></h6>
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
                        <label class="detail-option-heading fw-bold">Cantidad<span>*</span></label>
                        <input class="form-control detail-quantity" name="items" type="number" value="1">
                      </div>
                    </div>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <button class="btn btn-dark btn-lg mb-1" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                      </li>
                      <li class="list-inline-item"><a class="btn btn-outline-secondary mb-1" href="#"> <i class="far fa-heart me-2"></i>Add to wishlist</a></li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
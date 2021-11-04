<?php if (isset($_SESSION['admin'])): ?>
<section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Agregar Producto</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Agregar Nuevo Producto</h1>
          <div class="row">
          <a class="btn btn-outline-dark btn-sm " href="<?= base_url ?>Usuarios/perfil" role="button">OPCIONES ADMINISTRADOR</a>
            <a class="btn btn-outline-success btn-sm " href="<?= base_url ?>Productos/gestionar" role="button">Ver Productos</a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="block mb-5">
            <div class="block-header"><strong class="text-uppercase">Datos de Producto</strong></div>
            <div class="block-body">
              <?php if (isset($_GET['id'])): ?>
                <?php $url_action = base_url . 'Productos/save&id=' . $pro->id ?>
                <?php else: ?>
                  <?php $url_action = base_url . 'Productos/save' ?>
                  <?php endif; ?>
                  <form action="<?= $url_action ?>" enctype="multipart/form-data" method="post" class="row d-flex justify-content-around">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-4">
                        <label class="form-label" for="firstname">Nombre</label>
                        <input type="text" name="nombre" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : '' ?>"class="form-control" id="nombre" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Categoria</label>
                        <select name="categoria" class="form-control ">
                          <?php $categoriaSelect = Utils::showCategorias() ?>
                          <?php while ($cat = $categoriaSelect->fetch_object()): ?>
                            <option  value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : '' ?>><?= $cat->nombre ?></option>
                            <?php var_dump($cat->id, $pro->id) ?>
                            <?php endwhile; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Color</label>
                        <select name="color" class="form-control ">
                            <?php $colorSelect = Utils::showColores() ?>
                            <?php while ($color = $colorSelect->fetch_object()): ?>
                                <option  value="<?= $color->id ?>" <?= isset($pro) && is_object($pro) && $color->id == $pro->categoria_id ? 'selected' : '' ?>><?= $color->nombre ?></option>
                                <?php var_dump($color->id, $pro->id) ?>
                            <?php endwhile; ?> 
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Estado</label>
                        <select name="estado" class="form-control ">
                            <?php $estadoSelect = Utils::showEstados() ?>
                            <?php while ($estado = $estadoSelect->fetch_object()): ?>
                                <option  value="<?= $estado->id ?>" <?= isset($pro) && is_object($pro) && $estado->id == $pro->categoria_id ? 'selected' : '' ?>><?= $estado->nombre ?></option>
                                <?php var_dump($estado->id, $pro->id) ?>
                            <?php endwhile; ?> 
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Marca</label>
                        <select name="marca" class="form-control ">
                            <?php $marcaSelect = Utils::showMarca() ?>
                            <?php while ($marca = $marcaSelect->fetch_object()): ?>
                                <option  value="<?= $marca->id ?>" <?= isset($pro) && is_object($pro) && $marca->id == $pro->categoria_id ? 'selected' : '' ?>><?= $marca->nombre ?></option>
                                <?php var_dump($marca->id, $pro->id) ?>
                            <?php endwhile; ?> 
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Proveedor</label>
                        <select name="proveedor" class="form-control ">
                            <?php $proveedorSelect = Utils::showProveedor() ?>
                            <?php while ($proveedor = $proveedorSelect->fetch_object()): ?>
                                <option  value="<?= $proveedor->id ?>" <?= isset($pro) && is_object($pro) && $proveedor->id == $pro->categoria_id ? 'selected' : '' ?>><?= $proveedor->nombre ?></option>
                                <?php var_dump($proveedor->id, $pro->id) ?>
                            <?php endwhile; ?> 
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="lastname">Talla</label>
                        <select name="talla" class="form-control ">
                            <?php $tallaSelect = Utils::showTalla() ?>
                            <?php while ($talla = $tallaSelect->fetch_object()): ?>
                                <option  value="<?= $talla->id ?>" <?= isset($pro) && is_object($pro) && $talla->id == $pro->categoria_id ? 'selected' : '' ?>><?= $talla->nombre ?></option>
                                <?php var_dump($talla->id, $pro->id) ?>
                            <?php endwhile; ?> 
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="mb-4">
                        <label class="form-label" for="company">Descripcion</label>
                        <textarea type="text" name="descripcion" placeholder="Describe aqui" required class="form-control "><?= isset($pro) && is_object($pro) ? $pro->descripcion : '' ?></textarea>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="street">Precio</label>
                        <input type="number" value="<?= isset($pro) && is_object($pro) ? $pro->precio : '' ?>" name="precio" step="0.01" placeholder="Ingrese precio" required class="form-control ">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-4">
                        <label class="form-label" for="street">Oferta</label>
                        <input type="number" value="<?= isset($pro) && is_object($pro) ? $pro->oferta : '' ?>" name="costo" step="0.01" placeholder="Ingrese costo" required class="form-control ">
                      </div>
                    </div>
                    
                    <div class="col-sm-2 ">
                      <div class="mb-4">
                        <label class="form-label" for="city">Cantidad</label>
                        <input type="number" value="<?= isset($pro) && is_object($pro) ? $pro->stock : '' ?>" name="cantidad" step="1" placeholder="Ingrese cantidad" required class="form-control ">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="state">Subir Imagen</label>
                        <input  type="file" name="foto"  class="form-control ">
                      </div>
                    </div>
                    <div class="col-sm-1">
                    <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
                        <div class=" border border-light ">
                            <img class="img-thumbnail " src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" alt="" width="100">
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="text-center mt-4">
                      <input type="submit" value="Guardar Producto" class="btn btn-outline-dark">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif ; ?>
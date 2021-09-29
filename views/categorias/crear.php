<h3 class="w-100">Cerar categoria</h3>

                <?php if (isset($_GET['id'])): ?>
                    
                    <?php $url_action = base_url . 'Categorias/save&id=' . $cat->id ?>
                <?php else: ?>
                    
                    <?php $url_action = base_url . 'Productos/save' ?>
                <?php endif; ?>

<form action="<?= base_url ?>Categorias/save" method="post">
    <div class="form-group">
        <label for="nombre" class="w-100">Nombre de categoria</label>
        <input type="text" value="<?= isset($cat) && is_object($cat) ? $cat->nombre : '' ?>" name="nombre" placeholder="Ingrese nombre" required class="form-control ">
    </div>
    <input type="submit" value="Guarcar" class="btn btn-success">
</form>
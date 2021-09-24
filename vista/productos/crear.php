

<div class="card">
    <div class="card-header">
        Agregar Producto
    </div>
    <div class="card-body">
        <form action="" method="post" class="row g-3">
            <!--Nombre-->
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text"class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>
            <!--Categoria-->
            <div class="col-md-6">
                <label for="categoria" class="form-label">Categoria:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>seleccione categoria</option>
                    <option value="1">Polos</option>
                    <option value="2">Casacas</option>
                    <option value="3">Pantalones</option>
                </select>
            </div>
            <!--Costo-->
            <div class="col-md-4">
                <label for="costo" class="form-label">Costo:</label>
                <input type="text" class="form-control" name="costo" id="costo" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>
            <!--Precio-->
            <div class="col-md-4">
                <label for="nombre" class="form-label">Precio:</label>
                <input type="text"class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>
            <!--Marca-->
            <div class="col-md-4">
                <label for="marca" class="form-label ">Marca:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>seleccione Marca</option>
                    <option value="1">Lilli</option>
                    <option value="2">Nike</option>
                    <option value="3">Puma</option>
                </select>
            </div>
    
            <!--Color-->
            <div class="col-md-12">
                <br>
                <label for="colores" class="form-label">Colores:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Rojo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Verde</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Negro</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Amarillo</label>
                </div>
            </div>
            <!--Proveedor-->
            <div class="col-md-6">
                <label for="proveedor" class="form-label">Proveedor:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>seleccione Proveedor</option>
                    <option value="1">Nike</option>
                    <option value="2">Adidas</option>
                    <option value="3">Gamarra</option>
                    <option value="4">Propio</option>
                </select>
            </div>
            <!--Talla-->
            <div class="col-md-6">
                <label for="talla" class="form-label">Talla:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>seleccione Talla</option>
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                    <option value="4">XL</option>
                </select>
            </div>
            <!--Imagen-->
            <div class="col-md-12">
                <label for="" class="form-label col-md-4">Imagen:</label>
                <input type="file" class="form-control " name="" id="" placeholder="" aria-describedby="fileHelpId">
                <input type="file" class="form-control " name="" id="" placeholder="" aria-describedby="fileHelpId">
                <input type="file" class="form-control " name="" id="" placeholder="" aria-describedby="fileHelpId">
            </div>
            <!--Estado-->
            <div class="col-md-12">
                <label for="estado" class="form-label">Estado:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Activo</label>
                </div>
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar Producto">
            <a  href="?controlador=productos&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</div>


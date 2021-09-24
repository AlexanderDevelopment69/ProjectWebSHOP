<div class="card">
    <div class="card-header">
        Agregar Categoria
    </div>
    <div class="card-body">
        
    <form action="" method="post">

    <div class="mb-3">
        <label for="catID" class="form-label">ID Categoria:</label>
        <input type="text" readonly required value ="<?php echo $categoria->catID;?>" class="form-control" name="catID" id="catID" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="catNombre" class="form-label">Nombre Categoria:</label>
        <input type="text"  required value ="<?php echo $categoria->catNombre;?>" class="form-control" name="catNombre" id="catNombre" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="catEstado" class="form-label">Estado:</label>
        <input type="text" required value ="<?php echo $categoria->catEstado;?>" class="form-control" name="catEstado" id="catEstado" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="catDescripcion" class="form-label">Descripción:</label>
        <input type="text" required value ="<?php echo $categoria->catDescripcion;?>" class="form-control" name="catDescripcion" id="catDescripcion" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>
      
      <input name="" id="" class="btn btn-success" type="submit" value="Modificar Categoria">
      <a  href="?controlador=categorias&accion=inicio" class="btn btn-primary">Cancelar</a>

    </form>
        
    </div>
</div>
<div class="card">
    <div class="card-header">
        Modificar Marca
    </div>
    <div class="card-body">
        
    <form action="" method="post">

    <div class="mb-3">
        <label for="marcID" class="form-label">ID:</label>
        <input type="text" readonly required value ="<?php echo $marca->marcID;?>" class="form-control" name="marcID" id="marcID" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="marcNombre" class="form-label">Nombre:</label>
        <input type="text"  required value ="<?php echo $marca->marcNombre;?>" class="form-control" name="marcNombre" id="marcNombre" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="marcDescripcion" class="form-label">Descripción:</label>
        <input type="text" required value ="<?php echo $marca->marcDescripcion;?>" class="form-control" name="marcDescripcion" id="marcDescripcion" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>
      
      <input name="" id="" class="btn btn-success" type="submit" value="Modificar Marca">
      <a  href="?controlador=marcas&accion=inicio" class="btn btn-primary">Cancelar</a>

    </form>
        
    </div>
</div>
<div class="card">
    <div class="card-header">
        Agregar Proveedor
    </div>
    <div class="card-body">
        
    <form action="" method="post">

      <div class="mb-3">
        <label for="provRUC" class="form-label">RUC Proveedor</label>
        <input type="text"  required class="form-control" name="provRUC" id="provRUC" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="provNombre" class="form-label">Nombre Proveedor</label>
        <input type="text"  required class="form-control" name="provNombre" id="provNombre" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="provTelefono" class="form-label">Telefono ó Celular:</label>
        <input type="text" required class="form-control" name="provTelefono" id="provTelefono" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="provDireccion" class="form-label">Dirección:</label>
        <input type="text" required class="form-control" name="provDireccion" id="provDireccion" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="provCorreo" class="form-label">Correo Electronico:</label>
        <input type="email" required class="form-control" name="provCorreo" id="provCorreo" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>
      
      <input name="" id="" class="btn btn-success" type="submit" value="Agregar Categoria">
      <a  href="?controlador=proveedores&accion=inicio" class="btn btn-primary">Cancelar</a>

    </form>
        
    </div>
</div>
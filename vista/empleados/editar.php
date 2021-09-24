<div class="card">
    <div class="card-header">
        Agregar Usuario
    </div>
    <div class="card-body">
        
    <form action="" method="post">

      <div class="mb-3">
        <label for="dni" class="form-label">Dni:</label>
        <input type="text"class="form-control" value ="<?php echo $empleado->dni;?>" name="dni" id="dni" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombres:</label>
        <input type="text" required class="form-control" value ="<?php echo $empleado->nombre;?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellidos:</label>
        <input type="text" required class="form-control" value ="<?php echo $empleado->apellido;?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Ingrese su DNI">
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="email"  required class="form-control" value ="<?php echo $empleado->correo;?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Ingrese su correo electronico">
      </div>

      <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña:</label>
        <input type="password" required class="form-control" value ="<?php echo $empleado->contrasenia;?>" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="Ingrese su contraseña">
      </div>

      <div class="mb-3">
        <label for="domicilio" class="form-label">Domicilio:</label>
        <input type="text" required class="form-control" value ="<?php echo $empleado->domicilio;?>" name="domicilio" id="domicilio" aria-describedby="helpId" placeholder="Ingrese su domicilio">
      </div>
      
      <input name="" id="" class="btn btn-success" type="submit" value="Editar Empleado">
      <a  href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

    </form>
        
    </div>
</div>
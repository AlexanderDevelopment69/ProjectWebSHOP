<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar Usuarios</a>
    </div>
    <div class="card-body">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                    <th>DOMICILIO</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

        <?php foreach ($empleados as $empelado) {?>
                <tr>
                    <td> <?php echo $empelado->dni;?> </td>
                    <td><?php echo $empelado->nombre;?></td>
                    <td><?php echo $empelado->apellido;?></td>
                    <td><?php echo $empelado->correo;?></td>
                    <td><?php echo $empelado->contrasenia;?></td>
                    <td><?php echo $empelado->domicilio;?></td>
                    <td>
                        
                        <div class="btn-group" role="group" aria-label="">
                            <a  href="?controlador=empleados&accion=editar&dni=<?php echo $empelado->dni;?>" class="btn btn-info">Editar</a>
                            <a  href="?controlador=empleados&accion=borrar&dni=<?php echo $empelado->dni;?>" class="btn btn-danger">Borrar</a>
                        </div>


                    </td>
                </tr>
        <?php }?>

            </tbody>
        </table>

    </div>
    
</div>



<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=proveedores&accion=crear" role="button">Agregar Proveedor</a>
    </div>
    <div class="card-body">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>RUC</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>DIRECCIÓN</th>
                    <th>CORREO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

        <?php foreach ($proveedor as $proveedor) {?>
                <tr>
                    <td><?php echo $proveedor->provRUC;?> </td>
                    <td><?php echo $proveedor->provNombre;?> </td>
                    <td><?php echo $proveedor->provTelefono;?></td>
                    <td><?php echo $proveedor->provDireccion;?></td>
                    <td><?php echo $proveedor->provCorreo;?></td>
                    <td>
                        
                        <div class="btn-group" role="group" aria-label="">
                            <a  href="?controlador=proveedores&accion=editar&provRUC=<?php echo $proveedor->provRUC;?>" class="btn btn-info">Editar</a>
                            <a  href="?controlador=proveedores&accion=borrar&provRUC=<?php echo $proveedor->provRUC;?>" class="btn btn-danger">Borrar</a>
                        </div>


                    </td>
                </tr>
        <?php }?>

            </tbody>
        </table>

    </div>
    
</div>



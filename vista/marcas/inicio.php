<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=marcas&accion=crear" role="button">Agregar Marca</a>
    </div>
    <div class="card-body">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

        <?php foreach ($marca as $marca) {?>
                <tr>
                    <td> <?php echo $marca->marcID;?> </td>
                    <td> <?php echo $marca->marcNombre;?> </td>
                    <td><?php echo $marca->marcDescripcion;?></td>
                    <td>
                        
                        <div class="btn-group" role="group" aria-label="">
                            <a  href="?controlador=marcas&accion=editar&marcID=<?php echo $marca->marcID;?>" class="btn btn-info">Editar</a>
                            <a  href="?controlador=marcas&accion=borrar&marcID=<?php echo $marca->marcID;?>" class="btn btn-danger">Borrar</a>
                        </div>


                    </td>
                </tr>
        <?php }?>

            </tbody>
        </table>

    </div>
    
</div>



<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=categorias&accion=crear" role="button">Agregar Categorias</a>
    </div>
    <div class="card-body">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>ESTADO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

        <?php foreach ($categoria as $categoria) {?>
                <tr>
                    <td> <?php echo $categoria->catID;?> </td>
                    <td> <?php echo $categoria->catNombre;?> </td>
                    <td><?php echo $categoria->catEstado;?></td>
                    <td><?php echo $categoria->catDescripcion;?></td>
                    <td>
                        
                        <div class="btn-group" role="group" aria-label="">
                            <a  href="?controlador=categorias&accion=editar&catID=<?php echo $categoria->catID;?>" class="btn btn-info">Editar</a>
                            <a  href="?controlador=categorias&accion=borrar&catID=<?php echo $categoria->catID;?>" class="btn btn-danger">Borrar</a>
                        </div>


                    </td>
                </tr>
        <?php }?>

            </tbody>
        </table>

    </div>
    
</div>



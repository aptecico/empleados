<?php
    include("../../conexion/conexion.php");
//cosulta a la base de datos
    $consulta="SELECT * FROM personas";
    //el resultado de la consulta
    $resultado=mysqli_query($conn,$consulta);
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div  class="alert alert-primary text-center" role="alert">
           <h3> Listado de personas</h3> <a class="btn btn-success" href="./formulario.php">Crear Nuevo</a>
        </div>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th><!--columna nombre-->
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Ciudad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $ndatos=0;
                while($columna=mysqli_fetch_array($resultado))
                {    
                    $ndatos++;            
                ?>
                <tr>
                    <td><?php echo $ndatos;?></td>
                    <td><?php echo $columna['nombre']; ?></td>
                    <td><?php echo $columna['apellido']; ?></td>
                    <td><?php echo $columna['edad']; ?></td>
                    <td><?php echo $columna['genero']; ?></td>
                    <td><?php echo $columna['ciudad']; ?></td>
                    <td>
                    <button type="button" class="btn btn-primary">Editar</button>
                    <a href="./procesardatos.php?btnEnviar=Eliminar&id=<?php echo $columna['id'];?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

</html>
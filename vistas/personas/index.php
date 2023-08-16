<?php
    include("../../conexion/conexion.php");
//cosulta a la base de datos
    $consulta="SELECT * FROM personas";
    //el resultado de la consulta
    $resultado=mysqli_query($conn,$consulta);
?>
<html>
    <head>
        <title>Personas</title>
    </head>
    <body>
        <table class="table">
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
                
                ?>
            </tbody>
        </table>
    </body>

</html>
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
           <h3> Crear nueva persona</h3>
           <a href="../personas/index.php" class="btn btn-warning">Atrás</a>
        </div>
        
        <fieldset>
            <legend>Datos basicos</legend>
            <form class="form-group" method="POST" action="./procesardatos.php">
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre">
                        </div>
                    </div>
                    
                    <div class="col-6">
                    <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Apellido">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group" >
                    <label for="genero" class="form-label">Genero:</label>
                    <select id="genero" name="genero" class="form-select">
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                        <option value="o"></option>
                    </select>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad"  placeholder="Edad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="ciudad">Edad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad"  placeholder="ciudad">
                        </div>
                    </div>
                </div>
            <br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" id="btnEnviar" name="btnEnviar"   value="Guardar">
                    <button class="btn btn btn-secondary" type="button">Limpiar</button>
                </div>
                


                        

            </form>
        </fieldset>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

</html>
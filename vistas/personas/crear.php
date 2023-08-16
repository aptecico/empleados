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
        </div>
        
        <fieldset>
            <legend>Datos basicos</legend>
            <form class="form-group">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input class="form-contol" type="text" id="nombre" name="nombre">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input class="form-contol" id="apellido" name="apellido">
                        </div>
                    </div>

                </div>
                <div class="mb-3">
            <label for="disabledSelect" class="form-label">Disabled select menu</label>
            <select id="disabledSelect" class="form-select">
                <option>Disabled select</option>
                <option>Disabled select 22</option>
                <option>Disabled select 2</option>
            </select>
    </div>

            </form>
        </fieldset>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar trabajador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container">
        <h1 style="text-align: center;">Agregar trabajador</h1>
        <div class="row">
            <div class="col-md-12" ">
                    <div class="form-group"  style="width: 100%; padding: 5%; text-align: center; border: 2px solid black; border-radius:5%;"" >
                        <form action="getTrabajador.php" method="get">
                                <label for="">Curp</label>
                                <input required type="text" name="curp" id="" class="form-control">
                                <label for="">Apellido Paterno</label>
                                <input required type="text" name="apellidoP" id="" class="form-control">
                                <label for="">Apellido materno</label>
                                <input type="text" name="apellidoM" id="" class="form-control">
                                <label for="">Nombre</label>
                                <input required type="text" name="nombre" class="form-control">
                                <label for="">Cargo</label>
                                <input required type="text" name="cargo" class="form-control">
                                <label for="">Actividad</label>
                                <input required type="text" name="actividad" class="form-control">
                                <button style="margin-top: 3%;" type="submit" class="btn btn-primary">Agregar</button>
                            </form>      
                </div>
                </div>
        </div>
    </div>
 
  
</body>
</html>
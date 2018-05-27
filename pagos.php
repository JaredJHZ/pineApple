<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Pineapple</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="./styles.css">
</head>
<body>
<table class="table">
            <thead class="thead-dark">
                <th>CURP</th>
                <th>Apellido Paterno</th>
                <th>Nombre</th>
                <th>Pago semanal</th>
            </thead>
        
<?php
    include('header.php');
    $date = new Datetime();
    $week = $date->format("W");
    include('conexion.php');
    $con = conectar();
    $primeraConsulta ="SELECT * FROM empleados";
    $result1 = mysqli_query($con,$primeraConsulta);
    if($result1->num_rows>0){
        while($row = $result1->fetch_assoc()){
            $curp = $row['CURP'];
            $apellidoP = $row['apellidoP'];
            $nombre = $row['nombre'];
            $segundaConsulta = "select * from asistencia where WEEK(fecha)=$week AND CURP='$curp'";
            $contador = 0;
            $extra = 0;
            $result2 = mysqli_query($con, $segundaConsulta); 
            if($result2->num_rows>0){
                while($row2 = $result2->fetch_assoc()){
                    
                    $contador = $contador + 200;
                    $extra = $extra + $row2['horas'];
                }
                $total = $contador + $extra;
                ?>
                <tbody>
                    <tr>
                        <th><?php echo $curp;  ?></th>
                        <th><?php echo $apellidoP;  ?></th>
                        <th><?php echo $nombre;  ?></th>
                        <th>$<?php echo $total;  ?></th>
                   <?php
            }
            
        }

    }
    mysqli_close($con);

?>
</tr>
</tbody>
</table>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./script1.js"></script>
</body>
</html>
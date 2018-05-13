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
       <div class="row justify-content-md-center">
       <h3 id="titulo">Asistencia</h3> 
       </div>
       <div class="row">
       </div>
       <table class="table">
       <thead class="thead-dark">
              <th>Curp</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Puesto </th>
              <th>Asistencia</th>
       </thead>
<?php
       include("conexion.php");
       $con = conectar();
       $consulta = "SELECT * FROM empleados";
       $result = mysqli_query($con,$consulta);
       if($result->num_rows>0){
              while($row = $result->fetch_assoc()){
                     $curp = $row['CURP'];
                     $nombre = $row['nombre'];
                     $apellidoP = $row['apellidoP'];
                     $puesto = $row['puesto'];
?>
       <tbody>
              <tr>
                     <th scope="row" >
                     <?php echo $curp;?>
                     </th>
                     <th>
                     <?php echo $nombre;?>
                     </th>
                     <th>   
                     <?php echo $apellidoP;?>
                     </th>
                     <th>
                     <?php echo $puesto;?>
                     </th>
                     <th>
                     <button onclick="sendDate()">Asistio</button>
                     </th>
              </tr>
       </tbody>
</table>
<?php
       }
       mysqli_close($con);
}
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>
</html>
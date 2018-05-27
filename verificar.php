<?php
       include("conexion.php");
       $curp = $_REQUEST["curp"];
       $horas = $_REQUEST["horas"];
       $con = conectar();
       $date = new DateTime();
       $accion = "INSERT INTO asistencia VALUES(now(), '$horas', '$curp');";
       if($con->query($accion)===TRUE){
              echo "Asistencia añadida";
       }else{
              echo mysqli_error($con);
       }
       $con->close();
?>
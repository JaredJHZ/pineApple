<?php
       include("conexion.php");
       $curp = $_REQUEST["curp"];
       $con = conectar();
       $date = new DateTime();
       $accion = "INSERT INTO asistencia VALUES(now(), 0, '$curp');";
       if($con->query($accion)===TRUE){
              echo "ok";
       }else{
              echo mysqli_error($con);
       }
       $con->close();
?>
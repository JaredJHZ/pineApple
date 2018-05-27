<?php
function agregarTrabajador($curp, $apellidoP, $apellidoM, $nombre, $cargo, $actividad){

    include("conexion.php");
    $con = conectar();
    $consulta = "INSERT INTO empleados values('$curp','$apellidoP','$apellidoM','$nombre','$cargo','$actividad');";
    $result = mysqli_query($con,$consulta);
    if($result->num_rows>0){
        echo "Trabajador agregado";
    }else{
        echo mysqli_error($con);
    }

}
?>

<?php


    $curp = $_GET["curp"];
    $apellidoP = $_GET["apellidoP"];
    $apellidoM = $_GET["apellidoM"];
    $nombre = $_GET["nombre"];
    $cargo = $_GET["cargo"];
    $actividad = $_GET["actividad"];
    agregarTrabajador($curp, $apellidoP, $apellidoM, $nombre, $cargo,$actividad);
    echo"<script language='javascript'>window.location='asistencia.php'</script>;"

?>
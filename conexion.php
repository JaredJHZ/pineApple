<?php
function conectar(){
       $user="root";
       $pass="";
       $server="localhost";
       $db="pineapple";
       $con=mysqli_connect($server,$user,$pass) or die ("error al conectar a la base de datos".mysqli_error());
       mysqli_select_db($con,$db);
       return $con;
}
?>

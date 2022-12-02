<?php       
  $servername="localhost";
  $username="root"; 
  $database="cena";
  $password="";

  $conexion=mysqli_connect($servername, $username, $password,  $database);
  if (!$conexion) {
    die("connection failed: " . mysqli_connect_error());
  }
?>
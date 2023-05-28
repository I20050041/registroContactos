<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "registro";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $nombre=$_GET["txtNombre"]; 
    $apellidoPaterno=$_GET["txtApellidoPaterno"]; 
    $apellidoMaterno=$_GET["txtApellidoMaterno"]; 
    $telefono=$_GET["txtTelefono"]; 
    $correo=$_GET["txtCorreo"]; 
    $id=$_GET["id"];
   $sql = "UPDATE contacto SET nombre='".$nombre."',apellidoPaterno='".$apellidoPaterno."',apellidoMaterno='".$apellidoMaterno."',telefono='".$telefono."',correo='".$correo."' WHERE idContacto=". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTabla.php"); 
mysqli_close( $conn );
   ?>


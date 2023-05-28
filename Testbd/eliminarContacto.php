<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "registro";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id=$_GET["id"];
   $sql = "UPDATE contacto SET estatus= 0 WHERE idContacto=". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTabla.php"); 
mysqli_close( $conn );
   ?>
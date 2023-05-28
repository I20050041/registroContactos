<?php
        $id=$_POST["idd"];
        $nombre=$_POST["txtnombre"];
        $apellidoPaterno=$_POST["txtapellidoPaterno"];
        $apellidoMaterno=$_POST["txtapellidoMaterno"];
        $telefono=$_POST["txttelefono"];
        $correo=$_POST["txtcorreo"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registro";
        $conn = new mysqli($servername,$username,$password,$dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $consulta= "SELECT * FROM contacto where estatus = 1";
$result = mysqli_query($conn,$consulta);
  if(!$result) 
  {
      echo "No se ha podido realizar la consulta";
  }
$colum = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
    <head>
      <title>Registro de contacto</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <form class="formulario" method="get" action="contactoEditar.php">
    <center>
    <h1>Modifica los datos del Registro</h1>
            <?php
            echo '<input type="hidden" name="id" value="'.$id.'"';
             ?>
            <?php
            echo '<label for = "nombre">Nombre:</label><br>
            <input type="text" id="txtNombre" name="txtNombre" value ="'.$nombre.'"><br>';  
            ?>    
            <?php
            echo '<label for = "apellido paterno">Apellido Paterno:</label><br>
            <input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno" value ="'.$apellidoPaterno.'"><br>';  
            ?> 
            <?php
            echo '<label for = "apellido materno">Apellido Materno:</label><br>
            <input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno" value ="'.$apellidoMaterno.'"><br>';  
            ?>  
           <?php
            echo '<label for = "telefono">Telefono:</label><br>
            <input type="text" id="txtTelefono" name="txtTelefono" value ="'.$telefono.'"><br>';  
            ?> 
            <?php
            echo '<label for = "correo">Correo:</label><br>
            <input type="text" id="txtCorreo" name="txtCorreo" value ="'.$correo.'"><br>';  
            ?>      
         <a class="bx bx-log-out" href="contactoEditar.php"></a>
         <input type="submit" value="Modificar" class="button">
         </center>
    </form>
</body>
</html>


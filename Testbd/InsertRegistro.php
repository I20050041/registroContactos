<html>
<form action="verTabla.php" method="GET">
<?php
$nombre=$_GET["txtNombre"]; 
$apellidoPaterno=$_GET["txtApellidoPaterno"]; 
$apellidoMaterno=$_GET["txtApellidoMaterno"]; 
$telefono=$_GET["txtTelefono"]; 
$correo=$_GET["txtCorreo"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO contacto(nombre,apellidoPaterno,apellidoMaterno,telefono,correo) VALUES ('".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$telefono."','".$correo."')";
if ($conn->query($sql) === TRUE) 
{
   $conn->close();
   header("Location:http://localhost:8080/web/Testbd/verTabla.php");
   exit();
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}
?>
</form>
</html>




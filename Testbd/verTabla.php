<!doctype html>
<html>
    <form>
    <head>
      <title>Mostrar tabla</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>
    <body>
    <script>
function confirmacion() 
    {
     var respuesta = confirm("¿Deseas realmente eliminar este registro?");
     if (respuesta == true) 
     {
      return true
     }
     else
     {
      return false;
     }
    }
</script>
<body>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-light">Tabla del contacto</a>
    </div>
  </nav>
  <div class="col-md-11">
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
            <td class ="text-center">idContacto</td>
              <td class ="text-center">Nombre</td>
              <td class="text-center">ApellidoPaterno</td>
              <td class="text-center">ApellidoMaterno</td>
              <td class="text-center">Telefono</td>
              <td class="text-center">Correo</td>
              <td class="text-center">Estatus</td>
              <?php
        require_once('config.inc.php');
        $conn = new mysqli($servername,$username,$password,$dbname);
        $consulta="select * from contacto where estatus = 1";
        $datos = $conn->query($consulta);
        while ($registro = mysqli_fetch_array($datos)) 
        {
         echo ' </tr>
          </thead>
          <tbody>
            <tr>
              <td><h7> '.$registro ['idContacto'].'</h7></td>
              <td><h7> '.$registro ['nombre'].'</h7></td>
              <td><h7> '.$registro ['apellidoPaterno'].'</h7></td>
              <td><h7> '.$registro ['apellidoMaterno'].'</h7></td>
              <td><h7> '.$registro ['telefono'].'</h7></td>
              <td><h7> '.$registro ['correo'].'</h7></td>
              <td><h7>'.$registro ['estatus']. '
              <td><h2><form action="eliminarContacto.php" method="GET"> 
              <input type="hidden" name="id" value="'.$registro ['idContacto'].'">
              <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirmacion()">
              </form></h7></td>
              <td><h2><form action="editarContacto.php" method="POST"> 
              <input type="hidden" name="modificar" value="Modificar">
              <input type="hidden" name="idd" value="'.$registro ['idContacto'].'">
              <input class="btn btn-warning" type="submit" value="Modificar">
              <input type="hidden" name="txtnombre" value="'.$registro['nombre'].'">
              <input type="hidden" name="txtapellidoPaterno" value="'.$registro['apellidoPaterno'].'">
              <input type="hidden" name="txtapellidoMaterno" value="'.$registro['apellidoMaterno'].'">
              <input type="hidden" name="txttelefono" value="'.$registro['telefono'].'">
              <input type="hidden" name="txtcorreo" value="'.$registro['correo'].'">
              </form></h2></td>
              <td></td>
            </tr>
          </tbody>'; 
        }
        $conn->close();
        ?>
            </tr>
          </thead>
        </table>
        <form action="frmInsert.php" method="get">
      <input class="btn btn-primary btn-lg" type="submit" value="Registrar">
    </form>
</html>
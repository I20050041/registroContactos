<!doctype html>
<html>
    <form>
    <head>
      <title>Mostrar tabla</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>
    <body>
        <?php
        require_once('config.inc.php');
        $conn = new mysqli($servername,$username,$password,$dbname);
        $consulta="select * from contacto";
        $datos = $conn->query($consulta);
        echo "<table class ='table table-striped table-dark'>";
        echo "
        <th scope=col>idContacto</th>
        <th scope=col>Nombre</th>
        <th scope=col>Apellido Paterno</th>
        <th scope=col>Apellido Materno</th>
        <th scope=col>Telefono</th>
        <th scope=col>Correo</th>
        <th scope=col>estatus</th>
        <th scope=col></th>";
        
        while ($registro = $datos->fetch_assoc()) 
        {
            echo "<tr>";
            echo "<td class='table-secondary'>".$registro["idContacto"]."</td>";
            echo "<td class='table-secondary'>".$registro["nombre"]."</td>";
            echo "<td class='table-secondary'>".$registro["apellidoPaterno"]."</td>";
            echo "<td class='table-secondary'>".$registro["apellidoMaterno"]."</td>";
            echo "<td class='table-secondary'>".$registro["telefono"]."</td>";
            echo "<td class='table-secondary'>".$registro["correo"]."</td>";
            echo "<td class='table-secondary'>".$registro["estatus"]."</td>";
            echo "<td class='table-secondary'></td>";
            #<input class='btn btn-outline-warning btn-sm' type='submit' value='Modificar'>
            #<input class='btn btn-outline-danger btn-sm' type='submit' value='Eliminar'><input class='btn btn-outline-warning btn-sm' type='submit' value='Modificar'></td>"; 
            echo "<tr/>";   
        }
        echo "</table>";
        $conn->close();
        ?>
        </form>
        <a href="frmInsert.html">
    <button>Volver</button>
  </a> </html>


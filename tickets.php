<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Final-Front</title>
</head>
<?php
    include("menu.php");
?>

<?php

    include("conexionBD.php");

    $sql = "SELECT * FROM compra_tickets";
    $consulta = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($consulta) > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Cantidad</th><th>Categoria</th></tr>";
    while($fila = mysqli_fetch_assoc($consulta)) {
        echo "<tr>
                <td>" . $fila["id"] . "</td>
                <td>" . $fila["nombre"]. "</td>
                <td>" . $fila["apellido"]. "</td>
                <td>" . $fila["email"]. "</td>
                <td>" . $fila["cantidad"]. "</td>
                <td>" . $fila["categoria"]. "</td>
            </tr>";
    }
    } else {
    echo "0 results";
    }

?>
<?php
    include("footer.php");
?>
</html>
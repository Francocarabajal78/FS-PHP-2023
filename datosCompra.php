<?php
    echo "Estamos en el archivo datosCompra.php";

print_r($_POST);

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["correo"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

echo $nombre . $apellido;

include("conexionBD.php");

$sql = "SELECT * FROM compra_tickets";
$sql2 = "INSERT INTO compra_tickets VALUE(NULL, '$nombre', '$apellido', '$email', '$cantidad', '$categoria')";
//ejecutar la consulta
$consulta = mysqli_query($conexion, $sql2);


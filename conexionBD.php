<php?
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $conexion = mysqli_connect($servidor, $usuario, $clave);
    $baseDatos = "clientes";
    mysqli_select_db($conexion, $baseDatos);
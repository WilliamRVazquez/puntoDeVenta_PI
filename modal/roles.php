<?

$conexion = conectar();

$consulta = "SELECT * FROM descripcion";
$query = mysqli_query($conexion, $consulta);

$row = mysqli_fetch_array($query);

?>
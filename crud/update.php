<?php

    include ('../modal/Conexion.php');

    $conexion = conectar();

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $consulta = "UPDATE `productos` SET `nombre`='$nombre', `imagen`='$imagen', `precio`='$precio',`stock`='$stock' WHERE `id`='$id'";
    $resultado = $conexion -> query($consulta);


    if ($resultado) {
        header("location:../dashboard/listaProductos.php");
    }

?>
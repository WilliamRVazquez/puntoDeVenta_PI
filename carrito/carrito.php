<?php

    include ('../modal/Conexion.php');

    $conexion = conectar();

    $id = $_POST['txtId'];
    $codigo = $_POST['txtCodigo'];
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $precio = $_POST['txtPrecio'];
    $productExist = $_POST['txtStock'];

    session_start();
    if (isset($_SESSION["carrito"])){
        $carrito = $_SESSION["carrito"];
    }else {
        $carrito = array();
    }
    array_push($carrito, [$id, $codigo, $nombre, $descripcion, $precio, $productExist]);
    $_SESSION["carrito"] = $carrito;

    header('location:../dashboard/dashboard.php');

?>
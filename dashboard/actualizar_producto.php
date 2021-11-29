<?php
    include ('../modal/Conexion.php');
    $conexion = conectar();

    $id = $_GET['id'];

    $consulta = "SELECT * FROM `productos` WHERE `id`='$id'";
    $query = mysqli_query($conexion, $consulta);

    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/cssTienda/bootstrap.min.css">
<?php include("../vistas/dash_head.php");?>
<body>
    <?php
    include("../vistas/dash_superior.php")
    ?>
    <!--CONTENIDO A CREAR -->
    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <legend>Datos del producto</legend>
                    <form  method="POST" action="../crud/update.php?id=<?php echo $row['id'];?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3"><br>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']?>">
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3"><br>
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3"><br>
                                    <label class="form-label">Imagen del Producto</label>
                                    <img height="75px" src="data: image/jpg; base64, <?php echo base64_encode($row['imagen']);?>" alt="producto">
                                    <input type="file" class="form-control" name="imagen" value="" REQUIRED><br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio" placeholder="$0" value="<?php echo $row['precio']?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" class="form-control" name="stock" placeholder="0" value="<?php echo $row['stock']?>">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
                        <a href="listaProductos.php" class="btn btn-default">Cancelar</a>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

    <?php include_once ('../vistas/dash_footer.php')?>

    </div>
    <?php
        include("../vistas/dash_inferior.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="../js/jsTienda/bootstrap.min.js"></script>
</body>
</html>
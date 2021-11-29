<?php include_once ('../vistas/dash_head.php')?>

<body id="page-top">
    <?php include_once('../vistas/dash_superior.php')?>

        <!-- CONTENIDO DEL DASHBOARD -->
        <div class="container-fluid">
                    <!-- Lista de Contenido -->
                        <a href="buscarProducto.php"><button class="buscarP" id="abrir">Agregar Producto</button></a>
                            <h1>LISTA DE PRODUCTOS</h1>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>CODIGO</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>PRECIO</th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>
                            <tbody>
                            </tbody>
                            </table>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once ('../vistas/dash_footer.php')?>
            <!-- End of Footer -->

        </div>

    <?php include_once('../vistas/dash_inferior.php')?>
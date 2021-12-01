<?php 
    include_once ('../vistas/dash_head.php');
?>

<body id="page-top">
    <?php include_once('../vistas/dash_superior.php')?>

        <!-- CONTENIDO DEL DASHBOARD -->
        <div class="container-fluid">
                    <!-- Lista de Contenido -->
                        <a href="buscarProducto.php"><button class="buscarP" id="abrir">Agregar Producto</button></a>
                        <a href=""></a>
                            <h1>LISTA DE PRODUCTOS</h1>
                            <br>
                            <?php

                                    $total = 0;
                                    if (isset($_SESSION["carrito"])) {
                                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>CODIGO</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO</th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>
                            <tbody>
                            <?php
                                    foreach ($_SESSION["carrito"] as $indice => $arreglo) {
                                            $total += $arreglo["canti"] * $arreglo["precio"];                                        
                                            echo "<tr>";
                                            foreach ($arreglo as $key => $value) {
                                                echo "<th>" .$value. "</th>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                            </tbody>
                            </table>
                            <?php
                                    }
                                    echo "<h1>Total: $ $total</h1>";
                            ?>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once ('../vistas/dash_footer.php')?>
            <!-- End of Footer -->

        </div>

    <?php include_once('../vistas/dash_inferior.php')?>
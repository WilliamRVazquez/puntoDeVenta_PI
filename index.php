<?php 
  session_start();
  $user = $_SESSION['usuario'];

  if($user == null || $user = ''){
    header("location:login.php");
  }


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/cssTienda/bootstrap.min.css">

    <title>Punto de Venta || Abarrotes DonChuy</title>
</head>
<body>
  <?php include('modal/Data.php')?>
    <nav class="navbar  navbar-expand-lg navbar-light" style="background-color: #d68112; ">
        <div class="container-fluid">
        </div>
      </nav>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>

      <div aling="center">
        <table class="table">
          <thead>
            <tr>
              <th>Codigo de Barra</th>
              <th>Descripcion del Producto</th>
              <th>Precio de Venta</th>
              <th>Cant</th>
            </tr>
          </thead>
        </table>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/jsTienda/bootstrap.min.js"></script>
</body>
</html>
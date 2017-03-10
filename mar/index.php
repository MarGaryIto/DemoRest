<!DOCTYPE html>
<?php
  $puerto = "localhost";
  $usuario = "root";
  $contrasena = "";

  $conexion = mysql_connect($puerto,$usuario,$contrasena);
  mysql_select_db("examen");

  $query = "SELECT * FROM productos";
  $result = mysql_query($query);
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Productos</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="agregar.php">Agregar <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Editar</a></li>
        <li><a href="#">Eliminar</a></li>
    </div>
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="panel-title">Todos los productos</h1>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>existencias</th>
                <th>precio compra</th>
                <th>precio venta</th>
                <th>editar</th>
                <th>eliminar</th>
              </tr>
              <?php
                while ( $registro = mysql_fetch_array($result)) {
              ?>
              <tr>
                <th><?php echo $registro[0]?></th>
                <th><?php echo $registro["nombre"]?></th>
                <th><?php echo $registro[2]?>></th>
                <th><?php echo $registro[3]?></th>
                <th><?php echo $registro[4]?></th>
                <th><?php echo $registro[5]?></th>
                <th>
                  <a href="editar.php?id=<?php echo $registro[0];?>">
                    <button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a>
                </th>
                <th>
                  <a href="eliminar.php?id=<?php echo $registro[0];?>">
                    <button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </a>
                </th>
              </tr>
              <?php
                }
              ?>
            </thead>
          </table>
        </div>
      </div>  
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>
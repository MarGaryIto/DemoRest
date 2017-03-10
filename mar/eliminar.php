<!DOCTYPE html>
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
        <li><a href="editar.php">Editar</a></li>
        <li><a href="eliminar">Eliminar</a></li>
    </div>
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="panel-title">Agregar producto</h1>
        </div>
        <div class="panel-body">
        <?php

          $id = $_REQUEST['id'];

          $query="SELECT * FROM productos where id='$id'";

          $puerto = "localhost";
          $usuario = "root";
          $contrasena = "";

          $conexion = mysql_connect($puerto,$usuario,$contrasena);
          mysql_select_db("examen");

          $query = "SELECT * FROM productos where id_producto='$id'";
          $result = mysql_query($query);
          $registro = mysql_fetch_array($result)
        ?>
          <form role="form" name="formulario" method="POST" type="submit" action="php/eliminadatos.php?id=<?php echo $id;?>">
            Producto<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $registro[1]; ?>" disabled>
            Descripcion<textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Agregue una descripcion" value="<?php echo $registro[2]; ?>" disabled></textarea>
            Existencias<input type="number" name="existencias" id="existencias" min="0" max="999" class="form-control" placeholder="existencias" value="<?php echo $registro[3]; ?>" disabled>
            Precio compra<input type="number" name="precio_compra" id="precio_compra" min="0" max="9999" step="0.01" class="form-control" placeholder="precio compra" value="<?php echo $registro[4]; ?>" disabled>
            Precio venta<input type="number" name="precio_venta" id="precio_venta" min="0" max="9999" step="0.01" class="form-control" placeholder="precio venta" value="<?php echo $registro[5]; ?>" disabled>
            <button type="submit" class="btn btn-primary">Eliminar Producto</button>
          </form>
        </div>
      </div>  
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>
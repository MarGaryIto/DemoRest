<?php
	$id = $_REQUEST['id'];

    include ("conexion.php");

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("examen");

    mysql_query("DELETE FROM productos WHERE id_producto='$id'");

    echo '<a href="/examen/index.php">volver</a>'
?>
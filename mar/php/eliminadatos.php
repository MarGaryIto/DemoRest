<?php
	$id = $_REQUEST['id'];

    $puerto = "localhost";
    $usuario = "root";
    $contrasena = "";

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("examen");

    mysql_query("DELETE FROM productos WHERE id_producto='$id'");

    echo '<a href="/examen/index.php">volver</a>'
?>
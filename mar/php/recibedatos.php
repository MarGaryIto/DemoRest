<?php
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$precio_compra = $_POST['precio_compra'];
	$precio_venta = $_POST['precio_venta'];

	include ("conexion.php");

	mysql_connect($puerto,$usuario,$contrasena);
	mysql_select_db("examen");

	mysql_query("INSERT INTO productos(nombre,descripcion,existencias,precio_compra,precio_venta) VALUES('$nombre','$descripcion','$existencias','$precio_compra','$precio_venta')");

	echo '<a href="/examen/index.php">volver</a>'
?>
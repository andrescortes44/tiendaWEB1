<?php

include("BaseDatos.php");

$id=$_GET["id"];

$transaccion= new BaseDatos();

$consultaSQL= "DELETE FROM producto WHERE idProducto='$id' ";

$transaccion->eliminarDatos($consultaSQL);

header("Location: vistaProductos.php");
?>
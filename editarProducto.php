<?php

 include("BaseDatos.php");

 $id=$_GET["id"];

 if(isset($_POST["botonEditar"])){

    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $precio = $_POST["precio"];
    $imagen= $_POST["imagen"];
    $descripcion = $_POST["descripcion"];


    $transaccion= new BaseDatos();

    $consultaSQL= "UPDATE producto SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',imagenes='$imagen' WHERE '$id' ";
 
    $transaccion->editarDatos($consultaSQL);
 
    header("Location:vistaProductos.php");
 }

 ?>

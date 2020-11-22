<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $imagen= $_POST["imagen"];
        $descripcion = $_POST["descripcion"];


        $transaccion=new BaseDatos();
        
        //creo consulta
        $consultaSQL="INSERT INTO producto(nombre, marca, precio, descripcion,imagenes) VALUES ('$nombre','$marca','$precio','$descripcion','$imagen')";

        //inserto datos
        $transaccion->agregarDatos($consultaSQL);
        
        
    }

    header("Location: vistaProductos.php");
    
?>
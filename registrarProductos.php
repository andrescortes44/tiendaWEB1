<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];

        $transaccion=new BaseDatos();
        
        //creo consulta
        $consultaSQL="INSERT INTO producto(nombre, marca, precio, descripcion) VALUES ('$nombre','$marca','$precio','$descripcion')";

        //inserto datos
        $transaccion->agregarDatos($consultaSQL);
    }







?>
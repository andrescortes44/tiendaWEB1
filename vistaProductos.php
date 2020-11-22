<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="vistaProductos.css">
    <title>Productos</title>
</head>
<body>
    <header>        
         <section class="contenedor_cabecera">
        <h1>LISTA DE PRODUCTOS</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>             
    </header>   

    <?php
    
        include("BaseDatos.php");


        $transaccion=new BaseDatos();

        $consultaSQL="SELECT * FROM producto WHERE 1";

        $productos=$transaccion->consultarDatos($consultaSQL);

    ?>

    <div class="container">
        
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>
                <div class="col mb-4">
                    <div class="hover-img">
                        <div class="card h-100">                        
                            <img src="<?php echo($producto["imagenes"])?>" class="card-img-top" alt="imagen">
                            <div class="hover">
                                <button type="button" id="editar" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                    EDITAR
                                </button>
                                <a href="eliminarProducto.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger" id="eliminar">ELIMINAR</a>                               
                            </div>
                        </div>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                            <p class="card-text"><?php echo($producto["marca"])?></p>
                            <p class="card-text"><?php echo($producto["descripcion"])?></p>
                        </div>                   
                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICION DE PRODUCTO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo($producto["nombre"])?>">
                                            <label>Descripción:</label>
                                            <textarea class="form-control" rows="4" name="descripcion" id="descripcion"><?php echo($producto["descripcion"])?></textarea>               
                                            <button type="submit" class="btn btn-info">Editar</button>
                                        </div>
                                    </form>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>            
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
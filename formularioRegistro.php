<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="formularioRegistros.css">
    <title>Tienda WEB1</title>
</head>
<body>  
     <header>        
         <section class="contenedor_cabecera">
        <h1>ADMINISTRACION DE PRODUCTOS</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>             
    </header>   

    <main>
    <div class="container">
            <form action="registrarProductos.php" method="POST">
                <h1>DATOS DEL PRODUCTO</h1>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" autocomplete="off">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marca" autocomplete="off">
                    </div>
                </div>
                
                <input type="number" class="form-control" placeholder="Precio" name="precio" id="precio" autocomplete="off">

                <input type="text" class="form-control" placeholder="imagen URL (1280x720)" name="imagen" autocomplete="off">

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion" id="descripcion"></textarea>
                    </div>
                </div>
                
                 </div>
             </div>
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio" id="boton">Registrar</button>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php 

    /*$servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }*/

    $fecha_actual = date('d-m-Y');

    # echo $fecha_actual;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear factura</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body class="mb-5">

    <div class="container mt-5">

    <div class="row">

        <div class="col-4">
            <header>

                <div class="input-group">
                    <input class="form-control" type="text" name="buscar_cliente" id="buscar_cliente" placeholder="Ingrear Nombre o RFC del cliente">

                    <div class="input-group-append">
                        <span class="input-group-text">
                            Buscar
                        </span>
                    </div>
                </div>
            </header>
        </div>

        <div class="col-4">
            <a class="btn btn-success" href="../clientes/agregar-cliente.html" type="button">Agregar cliente</a>
        </div>

        <div class="col-4">
            <div class="form-group row">
                <label for="" class="col-sm-2">Fecha:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="fecha_actual_factura" value="<?php echo $fecha_actual ?>" readonly>
                </div>
            </div>
        </div>

    </div>

    <form action="" method="post">
        <section>
            <div id="tabla_resultados">
            </div>

            <table class="table table-hover table-striped" id="productos_agregados">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Producto</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Costo</th>
                        <th>Precio unitario</th>
                        <th>Importe</th>
                        <th>Impuestos</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="productos_agregados_detalles"></tbody>
            </table>

        </section>

        <div class="row">

            <div class="col-6">
                <div id="div-observaciones">
                    <label for="">Observaciones:</label>
                    <textarea name="" id="" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-6">
                <div>
                    <label for="" class="">Sub Total: $</label>
                    <input class="form-control" type="text" name="" id="" readonly>

                    <label for="">I.V.A: $</label>
                    <input class="form-control" type="text" name="" id="" readonly>

                    <label for="">Total: $</label>
                    <input class="form-control" type="text" name="" id="" readonly>

                    <div class="mt-2 text-center">
                        <input class="btn btn-success" type="submit" value="Generar factura">
                    </div>

                </div>
            </div>

        </div>

    </form>

    <div class="row mt-3">
        <div class="col-6">
            <div class="input-group">
                <input class="form-control" type="text" name="buscar_producto" id="buscar_producto" placeholder="Ingresar nombre del producto">
                <div class="input-group-append">
                    <span class="input-group-text">Buscar</span>
                </div>
            </div>
        </div>

        <div class="col-6">
            <a class="btn btn-success" href="../productos/agregar-producto.html" type="button">Agregar producto</a>
        </div>

        <div class="col-12">            
            <div id="resultados_productos">
            </div>
        </div>

    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/buscar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
</body>
</html>
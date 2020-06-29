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
</head>
<body class="mb-5">

    <div class="container mt-5">

    <div class="card">

        <div class="card-header">Crear factura</div>

        <div class="card-body">

            <div class="row">

                <div class="col-6">
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

                <div class="col-6">
                    <a class="btn btn-outline-success" href="../clientes/agregar-cliente.html" type="button">Nuevo cliente</a>
                </div>

            </div>

            <form action="registrarFactura.php" method="post">

                <div class="mt-2 text-center">
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Fecha:</label>
                        <div class="col-sm-2">
                            <input class="form-control form-control-sm text-center" type="text" name="" value="<?php echo $fecha_actual ?>" disabled>
                        </div>
                    </div>
                </div>

                <div id="tabla_resultados">
                </div>

                <table class="table table-hover table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">ID Producto</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Unidad</th>
                            <th class="text-center">Precio unitario</th>
                            <th class="text-center">Importe</th>
                            <th class="text-center">Impuestos</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody id="productos_factura"></tbody>
                </table>

                <div class="row">

                    <div class="col-6">
                        <div id="div-observaciones">
                            <label for="">Observaciones:</label>
                            <textarea name="observaciones_factura" id="observaciones_factura" cols="30" rows="7" class="form-control" style="resize: none;" required></textarea>
                        </div>
                    </div>

                    <div class="col-6">
                        <div>
                            <label for="" class="">Sub Total: $</label>
                            <input class="form-control" type="text" name="subtotal_factura" id="subtotal_factura" disabled>

                            <label for="">I.V.A:</label>
                            <input class="form-control" type="text" name="iva_factura" id="iva_factura" disabled>

                            <label for="">Total: $</label>
                            <input class="form-control" type="text" name="total_factura" id="total_factura" disabled>

                            <div class="mt-2 text-center">
                                <input class="btn btn-success btn-block" type="submit" value="Generar factura">
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
                    <a class="btn btn-outline-success" href="../productos/agregar-producto.html" type="button">Nuevo producto</a>
                </div>

                <div class="col-12">            
                    <div id="resultados_productos">
                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="js/buscar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
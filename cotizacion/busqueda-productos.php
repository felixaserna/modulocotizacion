<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ( !$conn ) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

    $tabla = "";
    $consultaTablaProductos = "SELECT * FROM productos LIMIT 0";
    $buscar_producto = "";

    if (isset($_POST['productos'])) {
        $buscar_producto = $_POST['productos'];
        $consultaTablaProductos = "SELECT * FROM productos WHERE
                                    descripcion LIKE '%".$buscar_producto."%'
                                  ";
    }

    $consultaProductosBD = mysqli_query($conn, $consultaTablaProductos);

    if ($consultaProductosBD->num_rows>=1) {
        echo 
            "
                <table class='table table-hover table-striped mt-3'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID Producto:</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
            ";

        while ($filaProducto = $consultaProductosBD->fetch_array(MYSQLI_ASSOC)) {
            echo 
                "
                    <tbody>
                        <tr>

                            <input type='hidden' name='linea' id='linea' value=" . $filaProducto['linea'] . ">
                            <input type='hidden' name='marca' id='marca' value=" . $filaProducto['marca'] . ">
                            <input type='hidden' namefabricante id='fabricante' value=" . $filaProducto['fabricante'] . ">
                            <input type='hidden' name='impuestos' id='impuestos' value=" . $filaProducto['impuestos'] . ">
                            <input type='hidden' name='unidad' id='unidad' value=" . $filaProducto['unidad'] . ">
                            <input type='hidden' name='costo' id='costo' value=" . $filaProducto['costo'] . ">
                            <input type='hidden' name='costo_dolares' id='costo_dolares' value=". $filaProducto['costo_dolares'] . ">
                            <input type='hidden' name='precio_dolares' id='precio_dolares' value=" . $filaProducto['precio_dolares'] . ">
                            <input type='hidden' name='cambio_peso_dolar' id='cambio_peso_dolar' value=". $filaProducto['cambio_peso_dolar'] . ">
                            <input type='hidden' name='fecha_contratacion' id='fecha_contratacion' value=" . $filaProducto['fecha_contratacion'] . ">
                            <input type='hidden' name='fecha_caducidad' id='fecha_caducidad' value=". $filaProducto['fecha_caducidad'] . ">
                            
                            <td>
                                <input class='form-control-plaintext' type='text' id='id_producto' name='id_producto' value=" . $filaProducto['id_producto'] ."  readonly>
                            </td>

                            <td>
                                <input class='form-control' type='number' id='cantidad' name='cantidad' value='1' required>
                            </td>
                            
                            <td>
                                <input class='form-control-plaintext' type='text' id='descripcion' name='descripcion' value=" . $filaProducto['descripcion'] . " readonly>
                            </td>
                            
                            <td>
                                <input class='form-control-plaintext' type='text' id='precio' name='precio' value=" . $filaProducto['precio'] . " readonly>
                            </td>
                            
                            <td>
                                <button class='btn btn-outline-success btn-block' id='btn-agregar-producto'>Añadir</button>
                            </td>
                            
                        </tr>
                    </tbody>
                ";
        }

        echo
            "</table>";
    } else {
        echo 
            "
                <div class='alert alert-success mt-3'>
                    <center>No hemos encontrado ningún registro para: " . $buscar_producto . "</center>
                </div>
            ";
    }

?>

<script type="text/javascript" src="js/agregar-productos.js"></script>
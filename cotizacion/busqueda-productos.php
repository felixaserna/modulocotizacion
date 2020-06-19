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
                <div>
                <p>Datos del producto</p>
            ";

        while ($filaProducto = $consultaProductosBD->fetch_array(MYSQLI_ASSOC)) {
            echo 
                "
                    <div class='row'>
                    
                        <div class='col-2'>                
                            <label>ID Producto:</label>
                            <input class='form-control' type='text' name='factura_id_producto' value=" . $filaProducto['id_producto'] ."  readonly>
                        </div>
                        <div class='col-2'>        
                            <label>Cantidad:</label>
                            <input class='form-control' type='number' name='cantidad' required>
                        </div>
                        <div class='col-2'>        
                            <label>Descripción:</label>
                            <input class='form-control' type='text' name='descripcion_producto' value=" . $filaProducto['descripcion'] . " readonly>
                        </div>
                        <div class='col-2'>
                            <label>Precio:</label>
                            <input class='form-control' type='text' name='precio_producto' value=" . $filaProducto['precio'] . " readonly>
                        </div>
                        <div class='col-4'>                    
                            <button class='btn btn-success' id='agregar-producto'>Añadir</button>
                        </div>

                    </div>
                ";
        }

        echo
            "</div>";
    } else {
        echo 
            "
                <div class='alert alert-success mt-2'>
                    <center>No hemos encontrado ningún registro para: " . $buscar_producto . "</center>
                </div>
            ";
    }

?>
<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $tabla = "";
    $consulta = "SELECT * FROM clientes LIMIT 0";
    $buscar_cliente = "";

    if (isset($_POST['clientes'])) {
        $buscar_cliente = $_POST['clientes'];
        $consulta = "SELECT * FROM clientes WHERE
                    clienteNombre LIKE '%".$buscar_cliente."%' OR
                    rfc_cliente LIKE '%".$buscar_cliente."%'";
    }

    $consultaBD = mysqli_query($conn, $consulta);

    if ($consultaBD->num_rows>=1) {
        echo 
            "
                <div>
            ";

        while($fila = $consultaBD->fetch_array(MYSQLI_ASSOC)) {
            echo 
                "
                    <div class='row'>

                        <div class='col-4'>
                            <div class='form-group row'>
                                <label class='col-sm-2'>ID:</label>
                                <div class='col-sm-10'>
                                    <input readonly class='form-control-plaintext' type='text' name='factura_id_cliente' value=" . $fila['id_cliente'] . ">
                                </div>
                            </div>
                            
                        </div>
                        <div class='col-4'>
                            <p>Cliente: " . $fila['clienteNombre'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p>RFC: " . $fila['rfc_cliente'] . "</p>
                        </div>

                    </div>

                    <div class='row'>
                        <div class='col-3'>
                            <p>Calle: " . $fila['calle'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>Número: " . $fila['numero'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>Número interior: " . $fila['numeroInterior'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>Colonia: " . $fila['colonia'] . "</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-3'>
                            <p>Localidad: " . $fila['localidad'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>Municipio: " . $fila['municipio'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>Estado: " . $fila['estado'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p>País: " . $fila['pais'] . "</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-4'>
                            <p>Código Postal: " . $fila['codigoPostal'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p>Correo electrónico: " . $fila['email'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p>Teléfono: " . $fila['telefono'] . "</p>
                        </div>
                    </div>

                ";
        }
        echo "</div>";
    } else {
        echo 
            "
                <div class='alert alert-success'>
                    <center>No hemos encontrado ningun registro para la busqueda: ". $buscar_cliente . "</center>
                </div>
            ";
    }

?>
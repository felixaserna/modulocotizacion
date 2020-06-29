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
                                <label class='col-sm-2 font-weight-bold'>ID:</label>
                                <div class='col-sm-10'>
                                    <input readonly class='form-control-plaintext' type='text' name='id_cliente' value=" . $fila['id_cliente'] . ">
                                </div>
                            </div>
                            
                        </div>
                        <div class='col-4'>
                            <p><strong>Cliente: </strong>" . $fila['clienteNombre'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p><strong>RFC:</strong> " . $fila['rfc_cliente'] . "</p>
                        </div>

                    </div>

                    <div class='row'>
                        <div class='col-3'>
                            <p><strong>Calle: </strong>" . $fila['calle'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>Número: </strong>" . $fila['numero'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>Número interior: </strong>" . $fila['numeroInterior'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>Colonia: </strong>" . $fila['colonia'] . "</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-3'>
                            <p><strong>Localidad: </strong>" . $fila['localidad'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>Municipio: </strong>" . $fila['municipio'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>Estado: </strong>" . $fila['estado'] . "</p>
                        </div>
                        <div class='col-3'>
                            <p><strong>País: </strong>" . $fila['pais'] . "</p>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-4'>
                            <p><strong>Código Postal: </strong>" . $fila['codigoPostal'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p><strong>Correo electrónico: </strong>" . $fila['email'] . "</p>
                        </div>
                        <div class='col-4'>
                            <p><strong>Teléfono: </strong>" . $fila['telefono'] . "</p>
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
<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $updateCliente = "UPDATE clientes SET 
                    clienteNombre = '$_POST[clienteNombre]',
                    rfc_cliente = '$_POST[rfc_cliente]',
                    calle = '$_POST[calle]',
                    numero = '$_POST[numero]',
                    numeroInterior = '$_POST[numeroInterior]',
                    colonia = '$_POST[colonia]',
                    localidad = '$_POST[localidad]',
                    municipio = '$_POST[municipio]',
                    estado = '$_POST[estado]',
                    pais = '$_POST[pais]',
                    codigoPostal = '$_POST[codigoPostal]',
                    email = '$_POST[email]',
                    telefono = '$_POST[telefono]'
                    WHERE id_cliente = '$_POST[id_cliente]' ";
    
    if (mysqli_query($conn, $updateCliente)) {
        echo "<br />" . "<h3>Los datos del cliente fueron actualizados</h3>";
        header('location: index.php');
    } else {
        echo "Error: " . $updateCliente . "<br />" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
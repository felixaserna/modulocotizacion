<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO clientes 
            (clienteNombre, rfc_cliente, calle, numero, numeroInterior, colonia, localidad, municipio, estado, pais, codigoPostal, email, telefono)
            VALUES 
            ('$_POST[clienteNombre]', '$_POST[rfc_cliente]', '$_POST[calle]', '$_POST[numero]', '$_POST[numeroInterior]', '$_POST[colonia]', '$_POST[localidad]', '$_POST[municipio]', '$_POST[estado]', '$_POST[pais]', '$_POST[codigoPostal]', '$_POST[email]', '$_POST[telefono]')";

    if (mysqli_query($conn, $sql)) {
        echo "<br />" . "<h3>Cliente registrado con éxito</h3>";
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br />" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
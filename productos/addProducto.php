<?php

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die ("Error de conexión: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO productos
            (descripcion, linea, marca, fabricante, impuestos, unidad, costo, precio, costo_dolares, precio_dolares, cambio_peso_dolar, fecha_contratacion, fecha_caducidad)
            VALUES
            ('$_POST[descripcion]', 
            '$_POST[linea]', 
            '$_POST[marca]', 
            '$_POST[fabricante]', 
            '$_POST[impuestos]', 
            '$_POST[unidad]', 
            '$_POST[costo]', 
            '$_POST[precio]',
            '$_POST[costo_dolares]',
            '$_POST[precio_dolares]', 
            '$_POST[cambio_peso_dolar]', 
            '$_POST[fecha_contratacion]', 
            '$_POST[fecha_caducidad]')";

    if (mysqli_query($conn, $sql)) {
        echo "<br />" . "<h3>Registro de producto creado con éxito</h3>";
    } else {
        echo "Error: " . $sql . "<br />" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
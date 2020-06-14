<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $updateProducto = "UPDATE productos SET
                    descripcion = '$_POST[descripcion]',
                    linea = '$_POST[linea]',
                    marca = '$_POST[marca]',
                    fabricante = '$_POST[fabricante]',
                    impuestos = '$_POST[impuestos]',
                    unidad = '$_POST[unidad]',
                    costo = '$_POST[costo]',
                    precio = '$_POST[precio]',
                    costo_dolares = '$_POST[costo_dolares]',
                    precio_dolares = '$_POST[precio_dolares]',
                    cambio_peso_dolar = '$_POST[cambio_peso_dolar]',
                    fecha_contratacion = '$_POST[fecha_contratacion]',
                    fecha_caducidad = '$_POST[fecha_caducidad]'
                    WHERE id_producto = '$_POST[id_producto]' ";

    if (mysqli_query($conn, $updateProducto)) {
        echo "<br />" . "<h3>Los datos del producto fueron actualizados</h3>";
        header('location: index.php');
    } else {
        echo "Error: " . $updateProducto . "<br />" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

    $id_cliente = $_POST['id_cliente'];
    $fecha = date('Y-m-d');
    $factura_observacion = $_POST['observaciones_factura'];
    $total_factura = $_POST['total_factura'];

    $factura_cantidad_solicitada = $_POST['cantidad_solicitada'];
    $factura_id_producto = $_POST['id_producto'];

    echo "Datos obtenidos: ";
    echo "\nID Cliente: " . $id_cliente;  
    echo "\nFecha actual: " . $fecha; 
    echo "\nObservación: " . $factura_observacion;
    echo "\nTotal: " . $total_factura;
    echo "\nCantidad producto: " . $factura_cantidad_solicitada;
    echo "\nID Producto: " . $factura_id_producto;

    /*
    $sql = "INSERT INTO factura 
        (factura_fecha, factura_id_cliente, factura_observacion, factura_total)
        VALUES 
        ('$_POST[fecha_actual_factura]', '$_POST[factura_id_cliente]', '$_POST[observaciones_factura]', '$_POST[total_factura]')";

    mysqli_close($conn);

    $sql = "INSERT INTO factura_productos 
        (cantidad_producto, factura_producto_id)
        VALUES
        ('$_POST[factura_cantidad_solicitada]', '$_POST[factura_cantidad_total_producto]')";

    mysqli_close($conn);*/

?>
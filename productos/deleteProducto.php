<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

    $id_producto = $_GET['id_producto'];
    $deleteProducto = "DELETE FROM productos WHERE id_producto='".$id_producto."' ";
    $productoEliminado = mysqli_query($conn, $deleteProducto);

    header('location: index.php');

?>
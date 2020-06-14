<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $id_cliente = $_GET['id_cliente'];
    $deleteCliente = "DELETE FROM clientes WHERE id_cliente='".$id_cliente."'";
    $clienteEliminado = mysqli_query($conn, $deleteCliente);

    header('location: index.php');


?>
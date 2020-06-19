<?php

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
</head>

<body>

    <a href="agregar-cliente.html" type="button">Agregar cliente</a>

    <table>
        <thead>
            <tr>
                <th>ID Cliente</th>
                <th>Cliente</th>
                <th>RFC</th>
                <th>Estado</th>
                <th>Pais</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($conn->query('SELECT id_cliente, clienteNombre, rfc_cliente, estado, pais FROM clientes') as $row) { ?>
                <tr>
                    <td><?php echo $row['id_cliente'] ?></td>
                    <td><?php echo $row['clienteNombre'] ?></td>
                    <td><?php echo $row['rfc_cliente'] ?></td>
                    <td><?php echo $row['estado'] ?></td>
                    <td><?php echo $row['pais'] ?></td>
                    <td>
                        <a href="editar-cliente.php?id_cliente=<?php echo $row['id_cliente'] ?>" type="button">Editar</a>
                        <a href="deleteCliente.php?id_cliente=<?php echo $row['id_cliente'] ?>" type="button">Eliminar</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

</body>
</html>
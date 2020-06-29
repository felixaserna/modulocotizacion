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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header">
                Listado de clientes
            </div>

            <div class="card-body">

                <a href="agregar-cliente.html" type="button" class="btn btn-success">
                    Agregar cliente
                </a>

                <table class="table table-striped table-hover mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Cliente</th>
                            <th>Cliente</th>
                            <th>RFC</th>
                            <th>Estado</th>
                            <th>País</th>
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
                                    <a href="editar-cliente.php?id_cliente=<?php echo $row['id_cliente'] ?>" type="button" class="btn btn-warning">
                                        Editar
                                    </a>
                                    <a href="deleteCliente.php?id_cliente=<?php echo $row['id_cliente'] ?>" type="button" class="btn btn-danger">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
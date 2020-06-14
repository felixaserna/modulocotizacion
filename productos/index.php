<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>
<body>

    <a href="agregar-producto.html">Agregar producto</a>

    <table>
        <thead>
            <tr>
                <th>ID </th>
                <th>Descripción</th>
                <th>Linea</th>
                <th>Marca</th>
                <th>Fabricante</th>
                <th>Impuestos</th>
                <th>Unidad</th>
                <th>Costo</th>
                <th>Precio</th>
                <th>Costo en dólares</th>
                <th>Precio en dólares</th>
                <th>Tipo de cambio peso dolar</th>
                <th>Fecha de cotización</th>
                <th>Fecha de caducidad</th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($conn->query('SELECT * FROM productos') as $row) { ?>

                <tr>
                    <td><?php echo $row['id_producto'] ?></td>
                    <td><?php echo $row['descripcion'] ?></td>
                    <td><?php echo $row['linea'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['fabricante'] ?></td>
                    <td><?php echo $row['impuestos'] ?></td>
                    <td><?php echo $row['unidad'] ?></td>
                    <td><?php echo $row['costo'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td><?php echo $row['costo_dolares'] ?></td>
                    <td><?php echo $row['precio_dolares'] ?></td>
                    <td><?php echo $row['cambio_peso_dolar'] ?></td>
                    <td><?php echo $row['fecha_contratacion'] ?></td>
                    <td><?php echo $row['fecha_caducidad'] ?></td>
                    <td>
                        <a href="editar-producto.php?id_producto=<?php echo $row['id_producto'] ?>" type="button">Editar</a>
                        <a href="deleteProducto.php?id_producto=<?php echo $row['id_producto'] ?>" type="button">Eliminar</a>
                    </td>
                </tr>

            <?php
                }    
            ?>
        </tbody>

    </table>
    
</body>
</html>
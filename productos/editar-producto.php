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
    $sql = "SELECT * FROM productos WHERE id_producto='".$id_producto."'";
    $resultadoProducto = mysqli_query($conn, $sql);

    while ($fila = mysqli_fetch_assoc($resultadoProducto)) {
        
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>

    <form action="editProducto.php" method="post">

        <h3>Agregar producto</h3>

        <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'] ?>">

        <label for="">Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $fila['descripcion'] ?>">

        <br>

        <label for="">Línea:</label>
        <input type="text" name="linea" value="<?php echo $fila['linea'] ?>">

        <br>

        <label for="">Marca:</label>
        <input type="text" name="marca" value="<?php echo $fila['marca'] ?>">

        <br>

        <label for="">Fabricante:</label>
        <input type="text" name="fabricante" value="<?php echo $fila['fabricante'] ?>">

        <br>

        <label for="">Impuestos:</label>
        <input type="text" name="impuestos" value="<?php echo $fila['impuestos'] ?>">

        <br>

        <label for="">Unidad:</label>
        <input type="text" name="unidad" value="<?php echo $fila['unidad'] ?>">

        <br>

        <label for="">Costo:</label>
        <input type="text" name="costo" value="<?php echo $fila['costo'] ?>">

        <br>

        <label for="">Precio:</label>
        <input type="text" name="precio" value="<?php echo $fila['precio'] ?>">

        <br>

        <label for="">Costo en dólares:</label>
        <input type="text" name="costo_dolares" value="<?php echo $fila['costo_dolares'] ?>">

        <br>

        <label for="">Precio en dólares:</label>
        <input type="text" name="precio_dolares" value="<?php echo $fila['precio_dolares'] ?>">

        <br>

        <label for="">Tipo de cambio dólar - peso:</label>
        <input type="text" name="cambio_peso_dolar" value="<?php echo $fila['cambio_peso_dolar'] ?>">

        <br>

        <label for="">Fecha de contratación:</label>
        <input type="date" name="fecha_contratacion" value="<?php echo $fila['fecha_contratacion'] ?>">

        <br>

        <label for="">Fecha de caducidad:</label>
        <input type="date" name="fecha_caducidad" value="<?php echo $fila['fecha_caducidad'] ?>">

        <br>

        <input type="submit" value="Agregar producto">

    </form>
    
</body>
</html>

<?php 

    }

?>
<?php 

    $servername = "localhost";
    $database = "aspec";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

    $id_cliente = $_GET['id_cliente'];
    $sql = "SELECT * FROM clientes WHERE id_cliente='".$id_cliente."'";
    $resultadoCliente = mysqli_query($conn, $sql);

    while ($fila = mysqli_fetch_assoc($resultadoCliente)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
</head>
<body>

    <form action="editCliente.php" method="post">

        <h3>Editar cliente</h3>

        <input type="hidden" name="id_cliente" value="<?php echo $fila['id_cliente'] ?>">

        <label for="">Cliente:</label>
        <input type="text" name="clienteNombre" value="<?php echo $fila['clienteNombre'] ?>" required>

        <br>

        <label for="">RFC:</label>
        <input type="text" name="rfc_cliente" value="<?php echo $fila['rfc_cliente'] ?>" required>

        <br>

        <label for="">Calle:</label>
        <input type="text" name="calle" value="<?php echo $fila['calle'] ?>" required>

        <br>

        <label for="">Número exterior:</label>
        <input type="text" name="numero" value="<?php echo $fila['numero'] ?>">

        <br>

        <label for="">Número interior:</label>
        <input type="text" name="numeroInterior" value="<?php echo $fila['numeroInterior']?>">

        <br>

        <label for="">Colonia:</label>
        <input type="text" name="colonia" required value="<?php echo $fila['colonia']?>">

        <br>

        <label for="">Localidad:</label>
        <input type="text" name="localidad" required value="<?php echo $fila['localidad']?>">

        <br>

        <label for="">Municipio:</label>
        <input type="text" name="municipio" required value="<?php echo $fila['municipio'] ?>">

        <br>

        <label for="">Estado:</label>
        <input type="text" name="estado" required value="<?php echo $fila['estado'] ?>">

        <br>

        <label for="">Pais:</label>
        <input type="text" name="pais" required value="<?php echo $fila['pais'] ?>">

        <br>

        <label for="">Codigo Postal:</label>
        <input type="text" name="codigoPostal" required value="<?php echo $fila['codigoPostal'] ?>">

        <br>

        <label for="">Correo Electronico:</label>
        <input type="email" name="email" required value="<?php echo $fila['email'] ?>">

        <br>

        <label for="">Telefono:</label>
        <input type="tel" name="telefono" required value="<?php echo $fila['telefono'] ?>">

        <br>

        <input type="submit" value="Editar">
    </form>
    
</body>
</html>

<?php 

    }

?>
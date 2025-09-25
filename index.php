<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="m-4">

        <h2 class="mt-4">Bienvenido <?php echo $_SESSION['username']; ?> </h2>
        <?php 
        include 'conexion.php'; 
        $sqlMision = "SELECT * FROM `generalidades` WHERE `clave` = 'mision'";
        $sqlVision = "SELECT * FROM `generalidades` WHERE `clave` = 'vision'";

        $resultMision = $conn->query(query: $sqlMision);
        $resultVision = $conn->query(query: $sqlVision);

        // Verificamos si resultMision tiene filas
        if ($resultMision->num_rows > 0) {
            $misionArray = $resultMision->fetch_assoc(); // Convertimos el resultado a array            
        } else {
            echo "No hay misión registrada.";
        }
         // Verificamos si resultVision tiene filas
        if ($resultVision->num_rows > 0) {
            $visionArray = $resultVision->fetch_assoc(); // Convertimos el resultado a array            
        } else {
            echo "No hay visión registrada.";
        }


        // Debemos de cerrar la conexión despues de usarla
        $conn->close();
        ?>

        <hr>
        <h4>Misión</h4>
        <p><?php echo $misionArray["valor"]; ?></p>

        <h4>Visión</h4>
        <p><?php echo $visionArray["valor"]; ?></p>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="mt-4">
        <h1 class="text-center">Bienvenido a la página de Productos</h1>
        <?php include 'conexion.php'; ?>
        <?php
        $sql = "SELECT p.nombre AS producto, p.precio, p.descripcion, p.foto1,  c.nombre AS categoria 
        FROM producto p 
        INNER JOIN categoria c ON p.id_categoria = c.id_categoria";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Guardar todos los resultados en un array
            $productos = $result->fetch_all(MYSQLI_ASSOC);
            // foreach ($productos as $row) {
            //     echo "Producto: " . $row["producto"] . " | Precio: Q" . $row["precio"] . " | Categoría: " . $row["categoria"] . " | Descripción: " . $row["descripcion"] . "<br>";
            // }
        } else {
            echo "No hay productos registrados.";
        }
        $conn->close();
        ?>
    </div>

    <div class="m-4 row">

        <?php foreach ($productos as $prod) { ?>
        <div class="col-3 m-2">
            <div class="card" style="width: 18rem;">
                <img src="img/<?php echo $prod['foto1'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $prod["producto"]; ?></h5>
                    <p class="card-text"><?php echo $prod["descripcion"]; ?></p>
                    <p class="card-text">Precio: Q <?php echo $prod["precio"]; ?></p>
                    <p class="card-text">Categoría: <?php echo $prod["categoria"]; ?></p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>





</body>

</html>
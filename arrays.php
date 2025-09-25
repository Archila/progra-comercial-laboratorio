<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays, Listas</title>
</head>

<body>
    <div class="m-4">

        <h4>Array indexado</h4>
        <?php
        $frutas = ["Manzana", "Pera", "Naranja"];
        // Acceder a un elemento
        echo "Elemento con índice 1: " . $frutas[1]; // Pera
        echo "<br>";
        echo "Elemento con índice 0: " . $frutas[0]; // Manzana
        echo "<br>";
        echo "Elemento con índice 2: " . $frutas[2]; // Naranja
        echo "<br>";
        ?>
        <br>

        <h4>Array asociativo</h4>
        <?php
        $edades = [
            "Carlos" => 20,
            "Ana" => 22,
            "Luis" => 18
        ];
        // Acceder a un valor
        echo "La edad de ANA es " . $edades["Ana"];  
        echo "<br>";
        echo "La edad de Carlos es " . $edades["Carlos"];
        echo "<br>";
        echo "La edad de Luis es " . $edades["Luis"];
        echo "<br>";
        ?>
        <br>
        <h4>Array multidimensional</h4>
        <?php
        $personas = [
            ["nombre" => "Carlos", "edad" => 20],
            ["nombre" => "Ana", "edad" => 22],
            ["nombre" => "Luis", "edad" => 18]
        ];
        // Acceder
        echo $personas[1]["nombre"]; // Ana        
        
        ?>
        <hr>
        <h2>Usar ciclos o bucles FOR o FOREACH</h2>

        <h4>Array indexado</h4>
        
        <?php
        echo "<h6>Usando FOR</h6>";
        // Recorrer con for
        for ($indice = 0; $indice < count($frutas); $indice++) {
            echo $frutas[$indice] . "<br>";
        }
        echo '<h6>Usando FOREACH</h6>';
        // Recorrer con foreach
        foreach ($frutas as $f) {
            echo $f . "<br>";
        }
        ?>
        <hr>
        <h4>Array asociativo</h4>
        <?php
        $edades = [
            "Carlos" => 20,
            "Ana" => 22,
            "Luis" => 18
        ];
        // Recorrer
        foreach ($edades as $nombre => $edad) {
            echo "$nombre tiene $edad años<br>";
        }
        ?>
        <hr>
        <h4>Array multidimensional</h4>
        <?php
        $personas = [
            ["nombre" => "Carlos", "edad" => 20],
            ["nombre" => "Ana", "edad" => 22],
            ["nombre" => "Luis", "edad" => 18]
        ];
        // Recorrer
        foreach ($personas as $persona) {
            echo $persona["nombre"] . " tiene " . $persona["edad"] . " años<br>";
        }
        ?>

    </div>
</body>

</html>
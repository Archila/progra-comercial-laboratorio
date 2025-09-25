<?php
$servername = "localhost";  // Servidor (en XAMPP es localhost)
$username = "root";       // Usuario por defecto en local o crear uno nuevo
$password = "";           // Contraseña (vacía en XAMPP por defecto)
$dbname = "tienda_muebles";  // Nombre de la base de datos

// Crear conexión
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PcTech";

// Crear conexión
$cn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($cn->connect_error) {
    die("Error en la conexión: " . $cn->connect_error);
}
?>

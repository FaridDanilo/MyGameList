<?php
$conn = mysqli_connect('localhost', 'root', '12345678', 'gamelist');

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
$conn = mysqli_connect('localhost', 'root', '12345678', 'gestion');

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

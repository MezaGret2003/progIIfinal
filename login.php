<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tecnova_fsa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recibe los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE user_name = '$username' AND pass_key = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success"; // Inicio de sesión exitoso
} else {
    echo "error"; // Usuario o contraseña incorrectos
}

$conn->close();
?>

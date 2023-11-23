<?php

$scon = mysqli_connect('localhost', 'root', '', 'tecnova_fsa');

if (!$scon) {
    die("Connection failed: ". myslqli_connect_error());
}


$nombre = $_POST["username"];
$password = $_POST["password"];


$sql = "INSERT INTO usuarios (user_name, pass_key)
VALUES ('$nombre', '$password')";

if (mysqli_query($scon, $sql)) {
    echo "Bienvenido a la familia de TECNOVAFSA";
}else {
    echo "Error en la inserción: ".mysqli_error($scon);
}

mysqli_close($scon);

echo "<p><a href='index.html'> Iniciar Sesión </a></p>";

?>
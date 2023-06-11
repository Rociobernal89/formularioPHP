<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

if (empty($nombre) || empty($apellido) || empty($email)) {
  echo "Es necesario completar todos los campos.";
  return;
}

if (preg_match('/[0-9]/', $nombre) || preg_match('/[0-9]/', $apellido)) {
    echo "Recuerda que no se permiten caracteres numéricos en los campos Nombre y Apellido.";
    return;
  }

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Por favor, ingresa un correo electrónico válido.";
  return;
}

if($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuario (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

if ($conn->query ($sql) === TRUE) {
    echo "Formulario enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>
<?php

$hostname= "localhost";
$dbusername= "root";
$dbpassword= "";
$db= "mi-app";

$conexion= mysqli_connect ($hostname, $dbusername, $dbpassword, $db);

$username = $_REQUEST ['username'];
$password = $_REQUEST ['password'];

$query = 'SELECT * FROM usuarios WHERE username  
LIKE "' . $username . '"';

$resultado = mysqli_query($conexion,$query);

$fila = mysqli_fetch_array($resultado);

if (password_verify($password,$fila["Password"])){
    header ('Location: /app/home/home.php');
}else{
    header('Location: /app/login/login.php');
}


?>
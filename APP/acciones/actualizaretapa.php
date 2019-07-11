<?php

session_start();


require('conexion.php');

$_SESSION["usuarioid"] = mysqli_insert_id($conexion);

$query = "SELECT * FROM cronogramas WHERE usuarioid = " . $_SESSION["usuarioid"] ;
$resultado = mysqli_query($conexion, $query);
$fila = mysql_fetch_array($resultado);
?>


?>
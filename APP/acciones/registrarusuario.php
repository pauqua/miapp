<?php
     session_start();

     $hostname= "localhost";
     $dbusername= "root";
     $dbpassword= "";
     $db= "mi-app";

     $conexion= mysqli_connect ($hostname, $dbusername, $dbpassword, $db);

     $name = $_REQUEST ['name'];
     $email = $_REQUEST ['email'];
     $username = $_REQUEST ['username'];
     $password = $_REQUEST ['password'];

     $hash = password_hash ($password, PASSWORD_BCRYPT);

     $query= 'INSERT INTO usuarios (nombre, username, password, email)
     VALUES ("'. $name . '",  "' . $username . '", "' . $hash . '", "' . $email . '")';
    
    mysqli_query ($conexion, $query);


    $_SESSION["usuarioid"] = mysqli_insert_id($conexion);

    $query = 'INSERT INTO cronogramas(usuarioid) VALUES ("' . $_SESSION["usuarioid"] . '")';

    mysqli_query($conexion, $query);

    header('Location: /app/home/home.php');
?>
<!DOCTYPE html>
<head>
    <title>registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="./styles-registro.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class= "container-fluid h-100 p-0">
        <div class= "row h-100 cuerpo no-gutters">
            <div class= "overflow-hidden col-md-6">
                <img class= "w-100" id="imagen " src= "images/pattern.jpg">
            </div>
            <div class= "login col-sm-12 col-md-6 h-100 d-flex  align-items-center justify-content-center">
                <form action="../acciones/registrarusuario.php" method="post">
                    <img src="images/logo.png">
                    <input class="nombre form-control mt-3 mb-3" name="name" id="usuario" type="text" placeholder="nombre y apellido">
                    <input class="email form-control mt-3 mb-3" name="email" id="usuario" type="email" placeholder="e-mail">
                    <input class="username form-control mt-3 mb-3" name="username" id="usuario" type="text" placeholder="nombre de usuario">
                    <input class="password form-control mb-5" type="password" name="password" id= "password" placeholder="contraseña">
                    <button type="submit" class="btn-signin btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
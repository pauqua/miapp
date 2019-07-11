<!DOCTYPE html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="login.js"></script>
    <link rel="stylesheet" href="./styles-login.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class= "h-100 container-fluid p-0">
        <div class= "h-100 row cuerpo no-gutters">
            <div class= "h-100 overflow-hidden col-md-6">
                <img class= "w-100" id="imagen " src= "images/pattern.jpg">
            </div>
            <div class= "login col-sm-12 col-md-6 d-flex align-items-center justify-content-center" id="form-ingreso">
                    <form action= "../acciones/validarlogin.php">
                    <img src="images/logo.png">
                    <input class="usuario form-control mt-5 mb-5" name="username" id="usuario" type="text" placeholder="usuario">
                    <input class="password form-control mb-5" name="password" type="password" id= "password" placeholder="contraseña">
                    <button type="submit" class="btn-login btn btn-primary w-100 mb-3">Ingresar</button>
                    <a href= "../registro/registro.php"> <button type="button" class="btn-signin btn btn-primary w-100" id="ir-a-registro">¡Registrate!</button></a>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>
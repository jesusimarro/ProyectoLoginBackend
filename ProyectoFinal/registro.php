<?php
    if (isset($_POST['ok'])) {
        $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $fechaActual = date('Y-m-d H:i:s');

        $consulta = "INSERT INTO `usuarios` (`nombre`, `email`, `contrasena`, `created`, `updated`, `lastlogin`) VALUES ('$nombre', '$email', '$contrasena', '$fechaActual', '$fechaActual', null)";
        $res = mysqli_query($db, $consulta);

        $crearUsuario = "SELECT * FROM `usuarios`";
        $results = mysqli_query($db, $crearUsuario);
        $fila = mysqli_num_rows($results); ?>

        <div class="alert alert-success" role="alert">
            Usuario registrado en la base de datos.
        </div>

    <?php }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Nuevo usuario</title>
</head>
<body>
    <h1>Registrar un nuevo usuario</h1>

    <form action="registro.php" method="POST">
        <div class="form-group">
            <label>Correo electrónico</label>
            <input type="email" class="form-control" name="email" required/>
        </div>
        <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" class="form-control" name="nombre" maxlength="60" required/>
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="contrasena" maxlength="16" required/>
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Registrar</button>
        <a href="principal.php" class="enlace-volver">Volver a la tabla</a>
    </form>
</body>
</html>
<?php
    session_start();

    if (isset($_POST['ok'])) {
        $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

        $nombre = $_POST['nombre'];
        $contrasena = $_POST['contrasena'];
        $fechaActual = date('Y-m-d H:i:s');

        $consulta = "SELECT `nombre`, `contrasena` FROM `usuarios` WHERE `nombre` = '$nombre' AND `contrasena` = '$contrasena'";
        $res = mysqli_query($db, $consulta);
        $filas = mysqli_num_rows($res);

        if ($filas) {
            header("location: principal.php");

            $query = "UPDATE `usuarios` SET `lastlogin` = '$fechaActual' WHERE `nombre` = '$nombre' AND `contrasena` = '$contrasena'";
            $res = mysqli_query($db, $query);

            $fechaEditar = "SELECT * FROM `usuarios`";
            $results = mysqli_query($db, $fechaEditar);
            $fila = mysqli_num_rows($results);
        } else { ?>
            <div class="alert alert-danger" role="alert">
                Los datos introducidos no son correctos.
            </div>
        <?php }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
    <h1>Inicio de sesión</h1>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" class="form-control" name="nombre" required/>
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="contrasena" required/>
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Entrar</button>
    </form>
</body>
</html>
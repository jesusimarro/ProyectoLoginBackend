<?php
    $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

    $id = $_GET['id'];
    $consultaEditar = "SELECT * FROM `usuarios` WHERE `id` = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body>
    <h1>Modificar usuario</h1>

    <?php
        $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

        if ($stmt = $db->prepare("SELECT * FROM `usuarios` WHERE `id` = '$id'")) {
            $stmt->execute();
            $stmt->bind_result($id, $nombre, $contrasena, $email, $created, $updated, $lastlogin, $type);

            while ($stmt->fetch()) { ?>
                <form action="guardar_cambios.php" method="POST">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="email" class="form-control" name="id" value= "<?php echo "$id"; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="email" class="form-control" name="email" value= "<?php echo "$email"; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" name="nombre" maxlength="60" value= "<?php echo "$nombre"; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="text" class="form-control" name="contrasena" maxlength="16" value= "<?php echo "$contrasena"; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Fecha de creación</label>
                        <input type="text" class="form-control" name="created" value= "<?php echo "$created"; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Última modificación</label>
                        <input type="text" class="form-control" name="updated" value= "<?php echo "$updated"; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Último inicio de sesión</label>
                        <input type="text" class="form-control" name="lastlogin" value= "<?php echo "$lastlogin"; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" class="form-control" name="type" value= "<?php echo "$type"; ?>" readonly/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                    <a href="principal.php" class="enlace-volver">Volver a la tabla</a>
                </form>
            <?php }
        }
    ?>
</body>
</html>
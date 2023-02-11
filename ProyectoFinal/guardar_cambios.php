<?php
    //Me da error si lo hago en editar.php, así que he creado esta aparte.

    $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $fechaActual = date('Y-m-d H:i:s');

    $editar = "UPDATE `usuarios` SET `nombre`='$nombre', `email`='$email', `contrasena`='$contrasena', `updated`='$fechaActual' WHERE `id`='$id'";
    $res = mysqli_query($db, $editar);

    $fechaEditar = "SELECT * FROM `usuarios`";
    $results = mysqli_query($db, $fechaEditar);
    $fila = mysqli_num_rows($results);

    header("location: principal.php");
?>
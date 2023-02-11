<?php

    $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

    $id = $_GET['id'];
    $eliminar = "DELETE FROM `usuarios` WHERE `id` = '$id'";
    $res = mysqli_query($db, $eliminar);

    header("location: principal.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Página principal</title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registro.php">Crear usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Listado de usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>

  <h1 class="principal">Usuarios registrados</h1>

  <table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Nombre</th>
    <th scope="col">Email</th>
    <th scope="col">Acciones</th>
    </tr>
  </thead>    
  <tbody>
    <?php
      $db = new mysqli("localhost", "root", "", "proyectofinal", 3307);

      if ($stmt = $db->prepare("SELECT `id`, `nombre`, `email` FROM `usuarios`")) {
        $stmt->execute();
        $stmt->bind_result($id, $nombre, $email);

        while ($stmt->fetch()) {
          echo "<tr>";
          echo "<td>" . $id . "</td>";
          echo "<td>" . $nombre . "</td>";
          echo "<td>" . $email . "</td>";
          echo "<td> <a href='editar.php?id=$id'>Modificar</a> | <a href='eliminar.php?id=$id'>Eliminar</a> </td>";
          echo "</tr>";
        }
      }
    ?>
  </tbody>
  </table>
</body>
</html>
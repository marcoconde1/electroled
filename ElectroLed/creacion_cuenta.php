<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crear Cuenta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="rounded p-1 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <form action="crear_cuenta.php" method="post">
    <div class="mb-3">
      <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
    </div>
    <div class="mb-3">
      <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
    </div>

      <?php
      if(isset($_GET["error"])) {
          $error = $_GET["error"];
          switch ($error) {
              case "email_existente":
                  echo "<p style='color: red;'>Email ya registrado.</p>";
                  break;
              case "usuario_existente":
                  echo "<p style='color: red;'>Usuario ya está registrado.</p>";
                  break;
              default:
                  echo "<p style='color: red;'>Datos erróneos.</p>";
          }
      }
      ?>

      <input type="submit" class="btn btn-primary" value="Crear cuenta">
  </form>
</div>
</body>
</html>
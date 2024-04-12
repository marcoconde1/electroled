<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="rounded p-1 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <form action="iniciar_sesion.php" method="POST">
      <div class="mb-3">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
      </div>

        <?php
        if(isset($_GET["error"])) {
            $error = $_GET["error"];
            if($error === "error_datos") {
                echo "<p style='color: red;'>Datos Erroneos.</p>";
            }
        }
        ?>

        <a class="btn btn-light" href="creacion_cuenta.php">Crear Cuenta</a>
        <input type="submit" name="iniciar_sesion" value="Iniciar Sesión" class="btn btn-primary">
    </form>
  </div>

</body>
</html>
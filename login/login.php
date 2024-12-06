<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pages/styles.css">
    <title>Document</title>
</head>
<body class="fondo">
  <div class="login">
    <h1>Administrador</h1>
    <form class="formulario" method="POST" action="../admin1/controlador.php">
        <input type="text" name="usuario" placeholder="Username" required />
        <input type="password" name="contrasena" placeholder="Password" required />
        <button type="submit" name="btn-inicio-sesion" class="btn btn-primary btn-block btn-large">Acceder</button>
    </form>
  </div>
</body>
</html>

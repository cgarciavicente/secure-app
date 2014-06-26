<?php
session_start();
if (!isset($_SESSION["usuario_autorizado"])){header ("Location:http://localhost/");} //Si $_SESSION está vacío, no puede entrar
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página wellcome.php</title>
  </head>
<body>
<h1> Bienvenido </h1>
<p> Esta página tiene acceso restringido </p>
<a href="config.php">La página de config</a><br>
<a href="account.php">La página de account</a><br>
<a href="logout.php">Salir</a>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["usuario_autorizado"])){header ("Location:http://localhost/");}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página config.php</title>
  </head>
<body>
<h1> ¡Config! </h1>
<p> Esta página tiene acceso restringido </p>
<a href="wellcome.php">La página de wellcome</a><br>
<a href="account.php">La página de account</a><br>
<a href="logout.php">Salir</a>
</body>
</html>
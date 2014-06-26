<?php
session_start();
$user="";
if (isset($_SESSION["usuario_autorizado"])){$user=$_SESSION["usuario_autorizado"];}
if ($user=="" || $user!="cesar"){header ("Location:http://localhost/");}
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
</body>
</html>
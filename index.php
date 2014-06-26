<?php
if (isset($_POST["user"], $_POST["pass"])){
$user=$_POST["user"];
$pass=$_POST["pass"];
if ($user=="cesar"&& $pass=="1234"){echo "Correcto";}
else{echo "Incorrecto";}}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Aplicación segura</title>
  </head>
<body>
<form action="" method="post">
<input type="text" name="user" placeholder="Email"><br>
<input type="password" name="pass" placeholder="Contraseña"><br>
<input type="submit" value="Entrar">
</form>
</body>
</html>
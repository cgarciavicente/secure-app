<?php
session_start();
//Para que cuando "cesar" pinche en salir ya no este autentificado y por tanto no pueda entrar:
unset($_SESSION["usuraio_autorizado"]);//Vaciamos $_SESSION
header("Location: http://localhost/");
?>
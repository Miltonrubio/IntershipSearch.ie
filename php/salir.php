<?php
//Iniciar sesion
session_start();
//Destruye las sesiones iniciadas
session_destroy();
//Rediracciona al login
header('Location: ../login.php');

?>

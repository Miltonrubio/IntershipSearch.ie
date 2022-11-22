<?php
//Linea de conexion a la bd
$mysqli=new mysqli('localhost','root','','prueba');
if ($mysqli->connect_errno) {
  //Si hay un error, se muestr un mensaje con el error
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
 ?>

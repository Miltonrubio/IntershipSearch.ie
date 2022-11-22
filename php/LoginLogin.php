<?php
//indica la conexion a la base de datos
require('Loginconexion.php');
//Da un retraso de 2 segundos antes de iniciar
sleep(2);

//indica el inicio de sesion
session_start();

//pide el email
$usu=$_POST['email'];

//pide el password
$pass=$_POST['clave'];
//indica el rol del correo y la clave tales como instalador, administrador etc.
$usuarios=$mysqli->query("Select nombre,rol,email, ID_usuario, clave
                        from usuarios Where email='".$usu."'
                      AND clave='".$pass."'");
if ($usuarios->num_rows==1):
  /*valida que si hay un usuario que coincidan sus datos, ejecute la consulta 
  y guarde los resultados en la variable datos*/
  $datos= $usuarios->fetch_assoc();
  
  //toma los datros de la consulta y los guarda en la sesion "usuario
  $_SESSION['usuario']= $datos;
  //Si se ejecuta, manda que no hay error, y te muestra el rol tomado
    echo json_encode(array('error'=>false,'rol'=>$datos['rol']));
else:
    echo json_encode(array('error'=>true));
    //si no se ejecuta, te muestra que hay un error
endif;








$mysqli->close();
 ?>

<?php
session_start();


//$Datos=$_SESSION['sesion'];


if(isset($_SESSION['usuario'])){
if($_SESSION['usuario']['rol']=="Admin"){
header('Location: admin.php');
}

else if($_SESSION['usuario']['rol']=="Cliente"){
    header('Location: Estudiante.php');
    }
    else if($_SESSION['usuario']['rol']=="Instalador"){
        header('Location: ../Instalador/Instalaciones/index.html');
        }

        else if($_SESSION['usuario']['rol']=="Ventas"){
            header('Location: ../PuntoVenta/mostrardatos/datosclientes.html');
            }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
   
   <!-- Tags meta requeridos -->
        <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

   <!-- Links css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estiloLogin.css">

    <!-- Links js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
   
   
    <!-- Icono pestaña -->
   <link rel="shortcut icon" href="img/Logo.png">
 
    <!-- Titulo pestaña -->
       <title>Login</title>
</head>

<body>
    <!-- Inicio sección -->
    <section>

        
        <!-- Imagen fondo -->
        <img class="wave" src="img/wave.png">
         <!-- Contenedor inicio de sesión -->
       <div class="container">
            <div class="img">
                <img src="img/bg.png">
            </div>
           <!-- Campos correo y contraseña -->
           <div class="login-content">
                <form action="" id="formLg">
                    <img src="img/TechVan.png">
                    <h2 class="title">Bienvenido</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="email" 
                            required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="clave"
                            required="required">
                    </div>
               
                    <!-- Botón iniciar sesión -->
                  
                    <input type="submit" class="btn btn-primary botonlg"  value="Iniciar Sesión">
                </form>
            </div>
        </div>


    </section>
    
    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap y js-->
    <script src="js/mainLogin.js"></script>
   

</body>

</html>
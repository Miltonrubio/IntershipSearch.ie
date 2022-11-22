//Iniciamos la funcion para tomar los datos del formulario
jQuery(document).on('submit','#formLg',function(event){
    event.preventDefault();
    //iniciamos el ajax
    jQuery.ajax({
      //tomamos la direccion del php, el tipo del formulario, y el dataType, para aceptar json
        url:"php/LoginLogin.php",
        type:'POST',
        dataType:'json',
        //tomamos los datos del formulario y los serializamos
        data:$(this).serialize(),
        beforeSend:function(){
   //Al dar click en el bton se cambia el texto del boton por la palabra "validando.."
          $('.botonlg').val('Validando...');
        }
      }) //Al realizar la funcion correctamente se muestran en la consola los datos
      .done(function(respuesta){
        console.log(respuesta);
        //Si no hay error, se realizaran acciones dependiendo del tipo de rol
        if (!respuesta.error) {
          //Si el usuario es un admin se mostrara un mensaje y se mandara a la seccion de administrador
          if (respuesta.rol=='Admin') {
            Swal.fire({
                title: "Bienvenido!",
                icon:"success"		
            });
            location='index2.php';
          }
                    //Si el usuario es un cliente se mostrara un mensaje y se mandara a la seccion de clientes
          else if (respuesta.rol=='Cliente') {     
            Swal.fire({
            title: "Bienvenido!",
            icon:"success"		
        });
        location='index2.php';
          }
                    //Si el usuario es un instalador se mostrara un mensaje y se mandara a la seccion de instalador
          else if (respuesta.rol=='Instalador') {     
            Swal.fire({
            title: "Bienvenido!",
            icon:"success"		
        });
        location='index2.php';
          }
                    //Si el usuario es un punto de venta se mostrara un mensaje y se mandara a la seccion de ventas
          else if (respuesta.rol=='Ventas') {
            Swal.fire({
              title: "Bienvenido!",
              icon:"success"		
          });
          location='index2.php';
          }
        }
        //en caso de que haya un error, se cancelara el valor de "Validando" del boton
        else {
          $('.error').slideDown('slow');
          setTimeout(function(){
          $('.error').slideUp('slow');
        },3000);
        $('.botonlg').val('Iniciar Sesion');
//Y se mostrara un mensaje de que los datos son correctos
        alert ("Datos Incorrectos");
        }
      })
      //Si falla, se mostraran los datos ingresados en la consola
      .fail(function(resp){
        console.log(resp.responseText);
      })
      //Siempre se mostrara el mensaje "Complete" en la consola
      .always(function(){
        console.log("complete");
    });
});

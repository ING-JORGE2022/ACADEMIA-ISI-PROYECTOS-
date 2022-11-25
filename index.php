<?php
	$error = 0;

	if(isset($_GET['idx'])){
		$error = $_GET['idx'];
	}
    ?>

   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO</title>
        <link rel="icon" type="image/x-icon" href="./imagenes/logo.ico">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="preload" href="./css/styles.css" as="style">
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/normalize.css">
        <script src="https://kit.fontawesome.com/bf06b785b9.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
function validarformulario(){
			

			let usuario = document.getElementById('txtusuario').value;
			let password = document.getElementById('txtpassword').value;
            }

            if(usuario==""){
				alert('Por favor ingresa tu usuario');
			}else{
				if(password==""){
					alert('Por favor ingresa tu password');
				}else{
                }
            }


        </script>
        
       
        
    </head>
    <body background="./imagenes/fondo.jpg" >

        <form action="./verificarLogin.php" method="POST" class="formulario">
            
               
                <h1>LOGIN</h1>
                <div class="contenedor">
           
                    
               
               
                      <div class="input-contenedor">
                          <i class="fa-solid fa-envelope icon"></i>
                          <input type="text" name="txtusuario" placeholder="Correo Electronico" id="textusuario" >
                   
                       </div>
                       
                       <div class="input-contenedor">
                           <i class="fa-solid fa-lock icon"></i>
                           <input type="password" name="txtpassword" placeholder="Contraseña" id="textpassword">
                       </div>
           
                       <div>
                          <input type="button" value="INICIAR" class="button" onclick="validarformulario() ">
                           <p> ¿No tienes una cuenta con nosotros ?<a class="link" href="./Registro.php"> Registrar</a></p>
                       </div>
                       <?php if($error==1){ ?>
			<p class="error1">USUARIO O CONTRASEÑA INCORRECTA.</p>
			<?php } ?>
             
           
            </form>   


    


    

    
    
</body>
</html>
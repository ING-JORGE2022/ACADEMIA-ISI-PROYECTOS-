
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <script src="https://kit.fontawesome.com/bf06b785b9.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./css/registro.css">
     <link rel="preload" href="./css/styles.css" as="style">
</head>
<body background="./imagenes/fondo.jpg">
    
 <form class="formulario" action="./index.php" method="POST">

     <h1>Resgistrate</h1>
     <div class="contenedor">

            <div class="input-contenedor">
               <i class="fa-solid fa-user icon"></i>
                <input type="text" placeholder="Nombre completo">
            </div>
    
    
           <div class="input-contenedor">
               <i class="fa-solid fa-envelope icon"></i>
               <input type="text" placeholder="Correo Electronico">
        
            </div>
            
            <div class="input-contenedor">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <div>
               <input type="submit" value="REGISTRAR" class="button">
                <p> ¿Ya tienes una cuenta ?<a class="link" href="./index.php"> Inicar Sesion</a></p>
            </div>
  

 </form>   

</body>
</html>
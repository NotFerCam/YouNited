<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="fotos/fercam.png" />  
  <!-- Favicon-->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #ffdd90;
      background-image: url("fotos/background1.jpg");
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    form{
      margin: auto;
      background-color: white;
      margin-top: 220px;
      margin-bottom: 100px;
      text-align: center;
      padding: 10px;
      border-radius: 10px;
      width: 400px;
    }

    input{
      height: 25px;
      font-size: 14px;
    }

    button{
      border: none;
      background-color: rgb(38, 113, 88);      
      color: white;
      width: 100px;
      height: 40px;
      border-radius: 5px;
    }

    button:hover{
      background-color: lightgreen; 
    }

    .titulo{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 40px;
      text-align: center;
      text-decoration: none;
      color: lightgreen;
      color: rgb(38, 113, 88)
    }

    .subtitulo{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
      text-align: center;
      color: rgb(38, 113, 88)
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">YouNited</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registro.php">Registrate</a></li>
          </ul>
      </div>
  </div>
  </nav>  
  <form method="$_POST">
    <b class="titulo">Iniciar sesión</b><br>
    <b class="subtitulo">Correo electronico:</b><br><br>
    <input type="text" name="correo" required><br><br>
    <b class="subtitulo">Contraseña:</b><br><br>
    <input type="password" name="contraseña" required><br><br>
    <table align="center" style="text-align: left;">
      <tr>
        <td><input type="radio" name="usuario" value="empleado"></td>
        <td><label for="empleado">Empleado</label></td>        
      </tr>
      <tr>
        <td><input type="radio" name="usuario" value="cliente" checked></td>
        <td><label for="cliente">Cliente</label></td>
      </tr>
    </table>
    <p>
      <?php
      error_reporting(0); 

      $base="tienda_videojuegos";

      $tabla="empleado";

      $c=mysqli_connect("localhost","david","david");

      mysqli_select_db($c,$base);

      $cont = $_REQUEST['contraseña'];
      $email= $_REQUEST['correo'];                                          
      
      if($_REQUEST['usuario']=="cliente"){
        $resultado= mysqli_query($c,"SELECT Contraseña FROM Cliente WHERE Email='$email'");

        if(isset($_REQUEST['submit'])){          
          while ($registro = mysqli_fetch_row($resultado)){                        
            foreach($registro  as $clave){
              if($clave==$cont){
                header("Location: paginaCliente.php");
                die();
              }else{
                echo "Correo electronico o contraseña inválidos";
              } 
            }
          }
        } 
      }else{
        $resultado= mysqli_query($c,"SELECT Contraseña FROM Empleado WHERE Email='$email'");

        if(isset($_REQUEST['submit'])){          
          while ($registro = mysqli_fetch_row($resultado)){                        
            foreach($registro  as $clave){
              if($clave==$cont){
                header("Location: paginaEmpleado.php");
                die();
              }else{
                echo "Correo electronico o contraseña inválidos";
              } 
            }
          }
        }    
      }

        mysqli_close($conexion)        
      ?>
    </p>     
    <p><button type="submit" name="submit">Enviar</button></p>
    <p><a href="registro.php">¿Aun no tienes una cuenta?</a></p>       
  </form>
</body>
</html>
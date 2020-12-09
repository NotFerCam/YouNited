<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos</title>
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
      background-color: cyan
      ;      
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    form{
      margin: auto;
      width: 500px;
      height: 400px;
      border-radius: 10px;
      background-color: white;
      margin-top: 220px;
      margin-bottom: 100px;
      text-align: center;
      padding: 10px;
    }

    input{
      height: 25px;
      font-size: 14px;
    }

    td{
      color: rgb(38, 113, 88)
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
    table{
      margin: auto;
    }
  </style>
</head>
<body background="background1.jpg">  
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="paginaEmpleado.php">YouNited</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="datosClientes.php">Datos personas</a></li>                                      
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirEmpleado.php">+Empleado</a></li>                    
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirCliente.php">+Cliente</a></li>              
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirVideojuegos.php">Videojuegos</a></li>                    
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuEmpleado.php">Atras</a></li>
          </ul>
      </div>
  </div>
  </nav>  
  <table>
    <tr>
      <td>
      <form method="$_POST">
        <p><b class="titulo">Modificar Cliente</b></p>
        <b><table style="width: 100%;">
          <tr>
            <td align="center" style="color: red;">DNI:</td>
            <td><input type="text" name="dni" required></td>
          </tr>
          <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="nombre" required></td>
          </tr>
          <tr>
            <td align="center">Apellidos:</td>
            <td><input type="text" name="apell" required></td>
          </tr>
          <tr>
            <td align="center">Telefono</td>
            <td><input type="text" name="tel" required></td>
          </tr>
          <tr>
            <td align="center">Email</td>
            <td><input type="text" name="correo" required> </td>
          </tr>
          <tr>
            <td align="center">Contraseña</td>
            <td><input type="password" name="contraseña" required></td>
          </tr>          
        </table></b><br>
        <p><button type="submit" name="cli">Modificar</button></p>
        <?php

           error_reporting(0);

           $base="tienda_videojuegos";

           $tabla="cliente";

           $v1=$_REQUEST['dni'];
           $v2=$_REQUEST['nombre'];
           $v3=$_REQUEST['apell'];
           $v4=$_REQUEST['tel'];
           $v5=$_REQUEST['correo'];
           $v6=$_REQUEST['contraseña'];

           $c=mysqli_connect("localhost","david","david");


           mysqli_select_db($c,$base); 

           if(isset($_REQUEST['cli'])){          
            mysqli_query($c,"UPDATE $tabla SET Nombre='$v2',Apellidos='$v3', Telefono='$v4',Email='$v5', Contraseña='$v6' WHERE DNI_CLI='$v1'"); 
            echo "Se ha modificado una tupla";
          }             

           if (mysqli_errno($c)==0){
                       }else{
               if (mysqli_errno($c)==1062){
                 }else{ 
                 $numerror=mysqli_errno($c);
                 $descrerror=mysqli_error($c);
                 echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
               }
           }
           mysqli_close($c);
 ?>
    </form>
      </td>
      <td>
      <form method="$_POST">
        <p><b class="titulo">Modificar Empleado</b></p>
        <b><table style="width: 100%;">
          <tr>
            <td align="center" style="color: red;">DNI:</td>
            <td><input type="text" name="dni" required></td>
          </tr>
          <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="nombre" required></td>
          </tr>
          <tr>
            <td align="center">Apellidos:</td>
            <td><input type="text" name="apell" required></td>
          </tr>
          <tr>
            <td align="center">Telefono</td>
            <td><input type="text" name="tel" required></td>
          </tr>
          <tr>
            <td align="center">Email</td>
            <td><input type="text" name="correo" required> </td>
          </tr>
          <tr>
            <td align="center">Contraseña</td>
            <td><input type="password" name="contraseña" required></td>
          </tr>          
        </table></b><br>
        <p><button type="submit" name="emple">Modificar</button></p>
        <?php

           error_reporting(0);

           $base="tienda_videojuegos";

           $tabla="empleado";

           $v1=$_REQUEST['dni'];
           $v2=$_REQUEST['nombre'];
           $v3=$_REQUEST['apell'];
           $v4=$_REQUEST['tel'];
           $v5=$_REQUEST['correo'];
           $v6=$_REQUEST['contraseña'];

           $c=mysqli_connect("localhost","david","david");


           mysqli_select_db($c,$base); 

           if(isset($_REQUEST['emple'])){          
            mysqli_query($c,"UPDATE $tabla SET Nombre='$v2',Apellidos='$v3', Telefono='$v4',Email='$v5', Contraseña='$v6' WHERE DNI_EMPLE='$v1'"); 
            echo "Se ha modificado una tupla";             
          }             

           if (mysqli_errno($c)==0){            
                       }else{
               if (mysqli_errno($c)==1062){
                 }else{ 
                 $numerror=mysqli_errno($c);
                 $descrerror=mysqli_error($c);
                 echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
               }
           }
           mysqli_close($c);
 ?>
    </form>
      </td>
      <td>
      <form method="$_POST">
        <p><b class="titulo">Modificar Videojuego</b></p>
        <b><table style="width: 100%;">
          <tr>
            <td align="center" style="color: red;">Codigo:</td>
            <td><input type="text" name="cod" required></td>
          </tr>
          <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="nombre" required></td>
          </tr>
          <tr>
            <td align="center">Empresa:</td>
            <td><input type="text" name="empr" required></td>
          </tr>
          <tr>
            <td align="center">Precio</td>
            <td><input type="text" name="prec" required></td>
          </tr>
          <tr>
            <td align="center">Descripcion</td>
            <td><input type="text" name="desc" required> </td>
          </tr>
          <tr>
            <td align="center">Categorias</td>
            <td><input type="text" name="cat" required></td>
          </tr>    
          <tr>
            <td align="center">Plataformas</td>
            <td><input type="text" name="plat" required></td>
          </tr>    
          <tr>
            <td align="center">Fecha Lanzamiento</td>
            <td><input type="text" name="flanz" required></td>
          </tr>    
        </table></b><br>
        <p><button type="submit" name="vid">Modificar</button></p>
        <?php

           error_reporting(0);

           $base="tienda_videojuegos";

           $tabla="videojuego";

           $v1=$_REQUEST['cod'];
           $v2=$_REQUEST['nombre'];
           $v3=$_REQUEST['empr'];
           $v4=$_REQUEST['prec'];
           $v5=$_REQUEST['desc'];
           $v6=$_REQUEST['cat'];
           $v7=$_REQUEST['plat'];
           $v8=$_REQUEST['flanz'];

           $c=mysqli_connect("localhost","david","david");


           mysqli_select_db($c,$base); 

           if(isset($_REQUEST['vid'])){          
            mysqli_query($c,"UPDATE $tabla SET Nombre='$v2',Empresa='$v3', Precio='$v4',Descripcion='$v5', Categorias='$v6', Plataformas='$v7', Fecha_lanzamiento='$v8' WHERE Cod_V='$v1'"); 
            echo "Se ha modificado una tupla";
          }             

           if (mysqli_errno($c)==0){
                       }else{
               if (mysqli_errno($c)==1062){
                 }else{ 
                 $numerror=mysqli_errno($c);
                 $descrerror=mysqli_error($c);
                 echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
               }
           }
           mysqli_close($c);
 ?>
    </form>
      </td>
    </tr>
  </table>            
</body>
</html>
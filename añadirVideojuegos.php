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
      background-color: orange;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    form{
      border-radius: 10px;
      background-color: white;
      margin-top: 220px;
      margin-bottom: 100px;
      margin-left: 40%;
      margin-right: 40%;
      text-align: center;
      padding: 10px;
      width: 400px;
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
              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuEmpleado.php">Atras</a></li>
          </ul>
      </div>
  </div>
  </nav>    
    <form method="$_POST">
        <p><b class="titulo">Añadir Videojuego</b></p>
        <b><table style="width: 100%;">
          <tr>
            <td align="center">Codigo:</td>
            <td><input type="text" name="cod" required></td>
          </tr>
          <tr>
            <td align="center">Nombre:</td>
            <td><input type="text" name="nombre" required></td>
          </tr>
          <tr>
            <td align="center">Empresa:</td>
            <td><input type="text" name="empresa" required></td>
          </tr>
          <tr>
            <td align="center">Precio</td>
            <td><input type="text" name="precio" required></td>
          </tr>
          <tr>
            <td align="center">Descripcion:</td>
            <td><input type="text" name="desc" required> </td>
          </tr>
          <tr>
            <td align="center">Categorias:</td>
            <td><input type="text" name="cat" required></td>
          </tr>      
          <tr>
            <td align="center">Plataformas:</td>
            <td><input type="text" name="plat" required></td>
          </tr>     
          <tr>
            <td align="center">Fecha Lanzamiento:</td>
            <td><input type="text" name="flan" required></td>
          </tr> 
        </table></b><br>
        <p><button type="submit" name="boton">Enviar</button></p>
        <?php

           error_reporting(0);

           $base="tienda_videojuegos";

           $tabla="videojuego";

           $v1=$_REQUEST['cod'];
           $v2=$_REQUEST['nombre'];
           $v3=$_REQUEST['empresa'];
           $v4=$_REQUEST['precio'];
           $v5=$_REQUEST['desc'];
           $v6=$_REQUEST['cat'];
           $v7=$_REQUEST['plat'];
           $v8=$_REQUEST['flan'];

           $c=mysqli_connect("localhost","david","david");


           mysqli_select_db($c,$base); 

           if(isset($_REQUEST['boton'])){          
            mysqli_query($c,"INSERT $tabla (COD_V,Nombre,Empresa,Precio,Descripcion,Categorías,Plataformas,Fecha_lanzamiento) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8')");             
            echo "Se ha añadido un nuevo videojuego";
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
        <p><a href="index.php">¿Ya tienes cuenta?</a></p>
    </form>
</body>
</html>
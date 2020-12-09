<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Clientes</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="fotos/fercam.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .contenedor{
                margin: auto;
            }
            section{
                margin-top: 100px;
                background-color: lightseagreen;
            }
            table{
                text-align: center;
                border-collapse: collapse;
                border: black solid 2px;
                margin-bottom: 50px;
                margin-left: 30%;
                margin-right: 30%;
                border-radius: 505;
                background-color: white;
            }
            tr{
                border:black solid 2px
            }
            td,th {
                padding: 5px;
            }
            body {                
                font-family: Arial, Helvetica, sans-serif;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            form{
                padding: 5px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>    
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="paginaEmpleado.php">YouNited</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">                    
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirEmpleado.php">+Empleado</a></li>                    
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirCliente.php">+Cliente</a></li>  
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="modificarDatos.php">Modificaciones</a></li>                                      
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="añadirVideojuegos.php">Videojuegos</a></li>                    
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="menuEmpleado.php">Atras</a></li>
                </ul>
            </div>
        </div>
    </nav>         
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Eliminacion y Consulta de Clientes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            <form align="center">
                <label>DNI Cliente:</label>
                <input type="text" name="cod">   
                <button name="submit">Eliminar</button>             
            </form><br>
            <?php
            error_reporting(0);

            $base="tienda_videojuegos";

            $tabla="cliente";

            $c=mysqli_connect("localhost","david","david");

            mysqli_select_db($c,$base);

            $resultado= mysqli_query($c,"SELECT DNI_CLI, Nombre, Apellidos, Telefono, Email, Contraseña FROM $tabla");
            echo "<div class='contenedor'>";
            echo "<table style='margin: 0 auto;'>";

            echo "  <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                    </tr>";
            while ($registro = mysqli_fetch_row($resultado)){                        
                echo "<tr>";
                foreach($registro  as $clave){
                echo "<td>",$clave,"</td>";
            }
            }
            echo "</tr></table></div>";

            $cod = $_REQUEST['cod'];

            if(isset($_REQUEST['submit'])){
                mysqli_query($c,"DELETE FROM $tabla WHERE DNI_CLI='$cod'");
            }
            mysqli_close($c);             
        ?><br><br><br>
                <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Eliminacion y Consulta de Empleados</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            <form align="center">
                <label s>DNI Empleado:</label>
                <input type="text" name="cod">   
                <button name="emple">Eliminar</button>             
            </form><br>
            <?php
            error_reporting(0);

            $base="tienda_videojuegos";

            $tabla="empleado";

            $c=mysqli_connect("localhost","david","david");

            mysqli_select_db($c,$base);

            $resultado= mysqli_query($c,"SELECT * FROM $tabla");
            echo "<div class='contenedor'>";
            echo "<table style='margin: 0 auto;'>";

            echo "  <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                    </tr>";
            while ($registro = mysqli_fetch_row($resultado)){                        
                echo "<tr>";
                foreach($registro  as $clave){
                echo "<td>",$clave,"</td>";
            }
            }
            echo "</tr></table></div>";

            $cod = $_REQUEST['cod'];

            if(isset($_REQUEST['emple'])){
                mysqli_query($c,"DELETE FROM $tabla WHERE DNI_EMPLE='$cod'");              
            }
            mysqli_close($c);             
        ?>
        </section>            
    </body>
</html>

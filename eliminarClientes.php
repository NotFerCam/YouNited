<html>
<head>
<title>Formulario para ELIMINAR REGISTROS de la tabla demo4, demodat1, demodat2 y demodat3</title>
</head>
<body>

<?php 

# definimos una variable con el NOMBRE DE LA BASE DE DATOS

$base="tienda_videojuegos";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","root","root");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);


#creamos una consulta de las bases de datos demo4 y demodat2
# esta segunda es la tabla de puntuaciones de la segunda prueba
# seleccionamos los campos DNI de ambas tablas
# y nombre y apellidos de la primera
# establecemos como condicion la IGUALDAD DE LOS DNI en TODAS LAS BASES





$resultado=mysqli_query($conexion,"SELECT DNI_CLI,Nombre,Apellidos,Email,Telefono FROM Clientes");

# presentamos la salida en forma de tabla HTML

# estos son los encabezados


echo "<table align=center border=2 bgcolor='#F0FFFF'>";
	echo "<tr bgcolor='#ffffff'><td colspan=7 align=center>Para BORRAR marca la casilla correspondiente al registro a eliminar</td><tr bgcolor='#ffffff'>";
	echo "<td align=center>DNI</td>";
	echo "<td align=center>Nombre</td>";
    echo "<td align=center>Apellidos</td>";
    echo "<td align=center>Email</td>";
    echo "<td align=center>Telefono</td>";
	echo "<td align=center>Borrar</td><tr>";
echo "</tr>";

#escribimos la etiqueta de apertura de un formulario como method=post
# como action ponemos la direccion de la página que realizará las actualizaciones
# en este caso sera ejemplo207.php

	echo "<form name='modificar' method=post action='borrar.php'>";
    while ($registro = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        foreach ($registro  as $clave) {
            echo "<td>",$clave,"</td>";
             
        }       
    }

# cerramos la conexión... y listo...

 		mysqli_close($conexion)
 


# SALIMOS DE PHP y ponemos los botones de borrar /enviar desde HTML

?>

<td colspan=5 align=center><br><input type=submit value='Eliminar registros marcados'>&nbsp;<input type=reset value='Borrar el formulario'>

<!-- CERRAMOS EL FORMULARIO Y LA TABLA -->

</form></table>

<!-- LAS CASILLAS DE VERIFICACION PUEDEN MODIFICARSE DESDE EL TECLADO
     SE PUEDE PASAR DE UNA A OTRA CON EL TABULAR
     Y PARA ACTIVARLAS/DESACTIVARLAS PUEDES HACERLO CON EL RATON
     O TAMBIEN PULSANDO LA BARRA ESPACIADORA
     SI LA PULSAS UNA VEZ, SE ACTIVA, SI VUELVES A PULSARLA SE DESACTIVA

-->






</body>
</html>





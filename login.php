<html>
	<!-- Esta es la pagina donde se puede verificar los detalles del usuario mediante las consultas
	con la base de datos, que para el proyecto se llama "Viva Amazonas" -->

<head>
	<meta charset="UTF-8">
	<!-- Character Set Meta Tag -->
	<meta charset="UTF-8">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Web System ... to illustrate the use of ...">
	<meta name="keywords" content="Sistema, Web, ...">
	<meta name="author" content="ACME Software Development Team">

	<title> Sistema Web - Viva Amazonas - Validación de datos</title>
    <style type="text/css">
        body {
            background-color: teal;
			background-clip: content-box;

			color: white;
        }

        </style>
</head>

<body>
<center>
	 
	<?php

	session_start(); //recomendación al inicio de las instrucciones php

	$codusr = $_POST["usuario"];
	$passusr = $_POST["contrasenha"];


	//enlace  servidor, usuario, contraseña, db del servidor mysql
	$conexion = mysqli_connect("127.0.0.1", "root", "", "vive-amazonas");
	//$conexion = mysqli_connect("IP_SERVIDOR", "USR_BD", "PSW_BD", "NOMBRE_BD"); 
	
	/*Como se observa la base de datos es llamada "vive-amazonas", no tiene contraseña y
	las consultas van directamente con
	la tabla usuario de dicha base */

	//sentencia SELECT
	$sentencia = "SELECT u.id_usuario, u.Usuario,u.nombre, u.contrasenha, u.estado, r.nombre FROM usuarios as u 
				JOIN roles as r
				ON r.id_roles = u.id_roles
				WHERE (usuario='$codusr'AND contrasenha='$passusr' );";


	

	//ejecutar la sentencia
	$resultado = mysqli_query($conexion, $sentencia);

	//número de filas en la respuesta de la consulta
	$numfilas = mysqli_num_rows($resultado);

	$fila = mysqli_fetch_row($resultado);
	/*Si el numero de filas es diferente a 1, es decir o no hay ningun valor coincidente 
	cuando se consulta a la base de datos o hay mas de un valor, se imprima 
	"El usuario o la contraseña no existe", em cambio si se valida la información 
	se pueden acceder a las opciones.*/

	if ($numfilas != 1) {

		echo "<br><br><font color='green'>El usuario o la contraseña no existe!!! </font>";
	
	session_destroy();
	
		
	}

	 else {
		
		$_SESSION['codusr'] = $codusr;
		//echo "<br><br>número de filas:",$numfilas;



		echo "<br/>";
		echo "Usuario autenticado";
		echo "<br/>";
		echo "Bienvenido:  ",  $fila[2];
		echo "<br/>";
		echo "Su id_usuario es:  ", $fila[0];
		echo "<br/>";
		echo "Su participación es como:  ", $fila[5];
		echo "<br/><br/>";
		/* Una vez el usuario esté validado puede acceder a las opciiones
		de mantenimienyo.*/
		if ($fila[5] === "ADMINISTRADOR") {
			echo '<a href="opciones.html"> Opciones de Mantenimiento como Administrador </a>';
		}elseif($fila[5]  === "DE") {
			echo '<a href="opcionesDE.html"> Opciones de Mantenimiento como DE </a>';
		} elseif($fila[5] === "CTE") {
			echo '<a href="opcionesCTE.html"> Opciones de Mantenimiento como CTE </a>';
		}elseif($fila[5] === "DIGE") {
			echo '<a href="opcionesDIGE.html"> Opciones de Mantenimiento como DIGE </a>';
		}
		else{
			echo '<a href="perfilusuario.html"> Opciones de Usuario </a>';
		}

	}

		
	?>
		</center>
	</body>

</html>
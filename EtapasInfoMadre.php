<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Mantenimiento de Información Madre</title>

    <style type="text/css">
        table {
        width: 100%;
        background-color: white;

        }
        th {
        height: 40px;
        text-align: center;
        color: teal;

        }
        td{
        height: 40px;
        text-align: center;
         
        }
        tr:hover {background-color:teal;
        }
|       input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        background-color: #3CBC8D
}
        .testbox a{
				font-size: 12px;
				text-decoration:none;
				display: block;
				border:1px solid #00b894;
				width: 150px;
				height: 20px;
				padding-top: 3px;
				text-align: center;
				margin: auto;
				background-color: white; 
				color: black;
				font-family: arial;
				box-shadow: 0px 0px 5px #000;
				border-radius: 4px;  }
        }


	  </style>
</head>

<body>
<center>
        <font size= 8 color="teal">  PORTAL DE EDICIÓN VIVA AMAZONAS  </font> 
        <br>
        <font size= 6 color="teal">  Mantenimiento de información madre </font> 
        <hr></hr>
		<?php
    session_start(); //recomendación al inicio de las instrucciones php
    //Obtencion de la variable de sesion de usuario autenticado
    $usuarioLogin = $_SESSION['codusr'];
    //Conexión con la base de datos
    $conexion = mysqli_connect("127.0.0.1", "root", "", "vive-amazonas");

     //sentencia SELECT
     $sentencia = "SELECT u.id_usuario, u.usuario, u.estado, r.nombre FROM Usuarios as u JOIN Roles as r
     ON r.id_roles = u.id_roles
     WHERE u.usuario= '$usuarioLogin' ";

     //ejecutar la sentencia
     $resultado = mysqli_query($conexion, $sentencia);

     //número de filas en la respuesta de la consulta
     $numfilas = mysqli_num_rows($resultado);
     ?>
    <br>  
    <table border = "2">
         <?php    
         while ($row = $resultado->fetch_assoc()) :
    ?>
         <tr>
             <td>  <a href="EtapasInfoMadre.php?=<?php echo $row['id_usuario']; ?>">Etapas</a>
            
            </td>


            <td>
                <a href="RequisitosInfoMadre.php?    =<?php echo $row['id_usuario']; ?>">Requisitos</a>
            </td>

            <td>
                <a href="TipoPersonaInfoMadre.php?=<?php echo $row['id_usuario']; ?>">Tipo de persona</a>
            </td>

        </tr>

        <?php
    endwhile;
    ?>

    
<table>

    
    <!-- Este formulario dirige los datos a mantenimientoUsuario.php mediannte
     la entrada "submit" al final del código-->
    <form action="Mantenimientoinformación madre.php" method="POST">
        <table border="1">    <!-- Formato de tabla -->
            <tr>
                <td>Inscripción</td>
                <td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr><tr>
                <td>Registro de consultas</td>
                <td>
                    <input type="date" name="id_usuario">
                </td>
				<td>
                    <input type="date" name="id_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Absolución de consultas</td>
                <td>
                    <input type="date" name="nueva_contrasenha">
                </td>
				<td>
                    <input type="date" name="nueva_contrasenha">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Registro de propuestas</td>
                <td>
                    <input type="date" name="nuevo_estado">
                </td>
				<td>
                    <input type="date" name="nuevo_estado">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>

				<tr>
                <td>Registro de propuestas</td>
                <td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr><tr>
                <td>Registro de expedientes</td>
                <td>
                    <input type="date" name="id_usuario">
                </td>
				<td>
                    <input type="date" name="id_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Registro de elegibilidad</td>
                <td>
                    <input type="date" name="nueva_contrasenha">
                </td>
				<td>
                    <input type="date" name="nueva_contrasenha">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Selección de propuestas</td>
                <td>
                    <input type="date" name="nuevo_estado">
                </td>
				<td>
                    <input type="date" name="nuevo_estado">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>
				<tr>
                <td>Raficación de resultados</td>
                <td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
			</tr>
				<tr>
                <td>Publicación de resultados</td>
                <td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
                    <input type="date" name="nuevo_usuario">
                </td>
				<td>
					<input type="submit" name="Elimminar" value = "Eliminar">
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
			</table>
			<br>

                    <input type="submit" name="Volver" value="Volver">

                    <input type="submit" name="Publicar" value="Publicar">




    </form>


</body>

</html>

<br>
<br>
<br>

<a href = "opciones.html">Regresar</a>
<br>
<br>

<a href = "login.html">Salir</a>
</center>


</body>

</html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Mantenimiento de Concursos - Documentos de concurso</title>

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
        <font size= 8 color="teal"> PORTAL DE EDICION VIVA AMAZONAS </font> 
        <br>
        <font size=6 color="teal"> Etapas de concurso </font>
        <br>

        <hr> </hr>

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
     $concurso =  "SELECT id_tipo_proyecto, FROM tipos_proyecto WHERE estado=1;";
     $proyectodatos =  "SELECT id_concurso, codigo, descripcion, introduccion, 
                                objetivos, ambito_geografico, monto, 
                                duracion FROM concurso WHERE estado=1;";

     //ejecutar la sentencia
     $resultado = mysqli_query($conexion, $sentencia);

     //número de filas en la respuesta de la consulta
     $numfilas = mysqli_num_rows($resultado);
     ?>
    <table border = "2">
    <tr> 
         <td> Código </td>
         <td> Tipo proyecto </td>
         <td> Etapa </td>  
         </table>
        <br>
    <table border = "2">  
         <?php    
         while ($row = $resultado->fetch_assoc()) :
    ?>
         <tr>
             <td>  <a href="DatosConcurso.php?=<?php echo $row['id_usuario']; ?>">Datos</a>
            
            </td>


            <td>
                <a href="DocumentosConcurso.php?    =<?php echo $row['id_usuario']; ?>">Documentos</a>
            </td>

            <td>
                <a href="EtapasConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Etapas</a>
            </td>

            <td>
                <a href="RequisitosConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Requisitos</a>
            </td>

            <td>
                <a href="CriteriosConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Criterios de evaluacion</a>
            </td>

            <td>
                <a href="ComitesConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Comités</a>
            </td>

            <td>
                <a href="ProyectosConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Proyectos</a>
            </td>

            <td>
                <a href="TiposproyectosConcurso.php?eliminar=<?php echo $row['id_usuario']; ?>">Tipos de proyectos</a>
            </td>

        </tr>

        <?php
    
    endwhile;
    ?>
    </table>
    <br>
    <br>  
    
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

			<br>
            </table>
        





    </form>

</table>


<a href = "opciones.html">Regresar</a>
<br>
<a href = "login.html">Salir</a>
<br>
</center>
</body>

</html>

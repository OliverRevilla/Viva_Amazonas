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
	  </style>

</head>
<body>
    
        <center>
        <font size= 8 color="teal"> PORTAL DE EDICION VIVA AMAZONAS </font> 
        <br>
        <font size=6 color="teal">Gestionar documentos de concurso</font>
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
                <a href="EtapasConcurso.php?=<?php echo $row['id_usuario']; ?>">Etapas</a>
            </td>

            <td>
                <a href="RequisitosConcurso.php?=<?php echo $row['id_usuario']; ?>">Requisitos</a>
            </td>

            <td>
                <a href="CriteriosConcurso.php?=<?php echo $row['id_usuario']; ?>">Criterios de evaluacion</a>
            </td>

            <td>
                <a href="ComitesConcurso.php?=<?php echo $row['id_usuario']; ?>">Comités</a>
            </td>

            <td>
                <a href="ProyectosConcurso.php?=<?php echo $row['id_usuario']; ?>">Proyectos</a>
            </td>

            <td>
                <a href="TiposproyectosConcurso.php?=<?php echo $row['id_usuario']; ?>">Tipos de proyectos</a>
            </td>

        </tr>

        <?php
    endwhile;
    ?>

    
    <!-- Este formulario dirige los datos a mantenimientoUsuario.php mediannte
     la entrada "submit" al final del código-->
     <form action="Mantenimientoinformación madre.php" method="POST">
     <br>
        <table border="1">    <!-- Formato de tabla -->
        <tr>
                <td>Seleccionar etapa a incluir en el concurso </td>
            </tr>
            <tr>
                <td>Inscripción </td>
                <td>
                    <input type="radio" name="Descripcion_base">

                </td>


				<td>

					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr><tr>
                <td>Registro de consultas</td>
                <td>
                    <input type="radio" name="Direccion"> 
                </td>

				<td>

					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Absolución de consultas</td>
                <td>
                    <input type="radio" name="nueva_contrasenha">
                </td>
                <td>


					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Registro de propuestas</td>
                <td>
                    <input type="radio" name="nuevo_estado">
                </td>


				<td>

					<input type="submit" name="Guardar" value = "Guardar">
			    </td>
            </tr>

				<tr>
                <td>Registro de expedientes</td>
                <td>
                    <input type="radio" name="nuevo_usuario">
                </td>


				<td>
				
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Registro de elegibilidad</td>
                <td>
                    <input type="radio" name="id_usuario">
                </td>


				<td>
			
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Registro de propuestas</td>
                <td>
                    <input type="radio" name="id_usuario">
                </td>


				<td>
			
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Registro de resultados</td>
                <td>
                    <input type="radio" name="id_usuario">
                </td>


				<td>
			
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
            <tr>
                <td>Publicación de resultados</td>
                <td>
                    <input type="radio" name="id_usuario">
                </td>


				<td>
			
					<input type="submit" name="Guardar" value = "Guardar">
			    </td>

            </tr>
    

			<br>
            </table>
        





    </form>

</table>
<br>
<br>
<a href = "opciones.html">Regresar</a>
<br>
<a href = "login.html">Salir</a>
<br>
</center>
</body>

</html>

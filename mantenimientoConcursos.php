<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Mantenimiento de Concursos</title>
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
        <font size=6 color="teal"> Mantenimiento de Concursos</font>
        <hr>
        <hr></hr>
        <br>
        <br>
 
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
        <!-- Registro de nuevo usuario, codificación html-->
       

     <table border = "3" col = "2">

     
     <?php
        //Mientras en numero de filas sean iguales al resultado de la consulta validamos la información
        //imprimos id_usuario, usuario,estado
        while ($row = $resultado->fetch_assoc()) :
        ?>

        

            <tr>
                 <td>  <a href="DatosConcurso.php?=<?php echo $row['id_usuario']; ?>">Datos</a>
                
                </td>

            <tr>
                <td>
                    <a href="DocumentosConcurso.php?    =<?php echo $row['id_usuario']; ?>">Documentos</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="EtapasConcurso.php?=<?php echo $row['id_usuario']; ?>">Etapas</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="RequisitosConcurso.php?=<?php echo $row['id_usuario']; ?>">Requisitos</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="CriteriosConcurso.php?=<?php echo $row['id_usuario']; ?>">Criterios de evaluacion</a>
                </td>
            </tr> 
            <tr>
                <td>
                    <a href="ComitesConcurso.php?=<?php echo $row['id_usuario']; ?>">Comités</a>
                </td>
            </tr>   
            <tr>
                <td>
                    <a href="ProyectosConcurso.php?=<?php echo $row['id_usuario']; ?>">Proyectos</a>
                </td>
            <tr>
                <td>
                    <a href="TiposproyectosConcurso.php?=<?php echo $row['id_usuario']; ?>">Tipos de proyectos</a>
                </td>

            </tr>
            <?php
        endwhile;
        ?>
    </table>
    <br>

    <a href = "opciones.html">Regresar</a>
    <br>
    <br>
    
    <a href = "login.html">Salir</a>

    </center>x|




</body>


</html>
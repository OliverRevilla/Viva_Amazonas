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
        width: 90%;
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
        <font size=6 color="teal"> Datos de Concurso </font>
        <br>

        <hr> </hr>
    <?php
        session_start(); //recomendación al inicio de las instrucciones php
        //Obtencion de la variable de sesion de usuario autenticado
        $usuarioLogin = $_SESSION['codusr'];
        //Conexión con la base de datos
        $conexion = mysqli_connect("127.0.0.1", "root", "", "vive-amazonas");

         //sentencia SELECT
         $sentencia = "SELECT u.id_usuario, u.Usuario,u.nombre, u.contrasenha, u.estado, r.nombre FROM usuarios as u 
         JOIN roles as r
         ON r.id_roles = u.id_roles
         WHERE usuario= '$usuarioLogin'";

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

<table border = "2">
<tr>
<td> Introducción </td>
</tr>
<tr>
<td>
    <a href = modificarDatosConcurso.php> Editar </a>


</td>
</tr>
</table>
<br>
<table border = "2">
<tr>
<td> Objetivos de concurso </td>
</tr>
<tr>
<td> <a href = modificarDatosConcurso.php> Editar </a>

</tr>
    </table>
<br>
<table border = "2">
<tr>
<td> Ámbito Geográfico </td>
</tr>
<tr>
<td> <a href = modificarDatosConcurso.php> Editar </a>


</tr>
</table>
<table border = "2">
<tr>
<td> Código </td>


<td> <a href = modificarDatosConcurso.php> Editar </a>

</td>
</tr>
<tr>
<td> Nombre de Proyecto </td>


<td> <a href = modificarDatosConcurso.php> Editar </a>

</td>
</tr>

<tr>
<td> Tipo de proyecto </td>

<td> <a href = modificarDatosConcurso.php> Editar </a>

</td>
</tr>
</table>
<br>
<input type="submit" value = "Guardar Cambios"> 
<br>
<br>
<br>
<a href=modificarDatosConcurso.php   > Regresar </a>



 </center>


</body>





</html>

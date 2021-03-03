<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Modificación de Usuario</title>
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
        

        textarea {
        text-align: center;
        box-sizing: border-box;
        }

	  </style>
</head>

<body>
<center>
        <font size= 8 color="teal">  PORTAL DE EDICIÓN VIVA AMAZONAS  </font> 
        <br>
        <font size= 6 color="teal">  Modificación de datos de concurso </font> 
        <hr></hr>
    <?php
    session_start(); //recomendación al inicio de las instrucciones php
    $usuarioLogin = $_SESSION['codusr'];

    $conexion = mysqli_connect("127.0.0.1", "root", "", "vive-amazonas");

    //sentencia SELECT
  
    $sentencia = "SELECT u.id_usuario, u.Usuario,u.nombre, u.contrasenha, u.estado, r.nombre FROM usuarios as u 
    JOIN roles as r
    ON r.id_roles = u.id_roles
    WHERE usuario= '$usuarioLogin'";

    //ejecutar la sentencia
    $resultado = mysqli_query($conexion, $sentencia);




    ?>
    <form action="DatosConcurso.php" method="POST">

        <table border="2">
            <tr>
                <td>Código de concurso</td>
                <td>
                    <input type="text" name="codigo_concurso" value="<?php echo ""; ?>">
                </td>
            </tr>
            <tr>
                <td>Tipo de concurso</td>
                <td>
                    <input type="text" name="tipo_concurso" value="<?php echo ""; ?>">
                </td>
            </tr>
            <tr>
                <td>Nombre de concurso</td>
                <td>
                    <input type="text" name="nombre_concurso" value="<?php echo ""; ?>">
                </td>
            </tr>
            <tr>
                <td>Código de concurso</td>
                <td>
                    <input type="text" name="codigo_concurso" value="<?php echo ""; ?>">
                </td>
            </tr>
            </table>
            <table>
            <tr>
                <td>Introducción</td>
                <td>
                <textarea name="comment" rows="10" cols="100"><?php echo "";?></textarea>
                </td>
            </tr>
            <tr>
                <td>Objetivos</td>
                <td>
                <textarea name="comment" rows="10" cols="100"><?php echo "";?></textarea>
                </td>
            </tr>
            </tr>
            <tr>
                <td>Ámbito geográfico</td>
                <td>
                <textarea name="comment" rows="10" cols="100"><?php echo "";?></textarea>
                </td>
            </tr>
    </table>
    <br>
    <input type="submit" value="Grabar actualizacion de concurso" name="actualizar">
    </form>
    <br>
    <br>
    <a href = "DatosConcurso.php">Regresar</a>
<br>
<br>

<a href = "login.html">Salir</a>
</body>

</html>
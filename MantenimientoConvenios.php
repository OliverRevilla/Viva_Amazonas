<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Mantenimiento de Convenios</title>
    <link rel="stylesheet" href="main1.css"/>
		<meta http-equiv = "Content Type" content="text/html; charset=utf-8"/>
		<meta charset="UTF-8">
		<style type="text/css">
		.text a{
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
	  </style>
</head>

<body>
<center>
        <font size= 8 color="teal">  PORTAL DE EDICION VIVA AMAZONAS  </font> 
        <br>
        <font size= 6 color="teal">  Mantenimiento de Convenios </font> 
        <br>
        <hr></hr>
        <font size= 5 color="teal">  Postulantes Ganadores </font> 
        <hr></hr>

    </center>

    <table border="1">
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
        WHERE (usuario='$codusr'AND contrasenha='$passusr' );";

        //ejecutar la sentencia
        $resultado = mysqli_query($conexion, $sentencia);

        //número de filas en la respuesta de la consulta
        $numfilas = mysqli_num_rows($resultado);
        ?>

        
        <tr>
            <td align="left" colspan="4">
                <a href="nuevoPostulanteGanador.php"> Nueva Postulante Ganador</a>
            </td>
        </tr>
        <tr>    
            <td>id_postulaciones</td>
            <td>Código de la postulación</td>
            <td>Estado</td>
            <td>Acciones</td>
        </tr>

        <?php
        //Mientras en numero de filas sean iguales al resultado de la consulta validamos la información
        //imprimos id_usuario, usuario,estado
        while ($row = $resultado->fetch_assoc()) :
        ?>

            <tr>
                <td><?php echo $row['id_postulaciones']; ?></td>
                <td><?php echo $row['id_usuario']; ?></td>
                <td><?php echo $row['estado']; ?></td>
                <td>
                    <a href="editarUsuario.php?editar=<?php echo $row['id_postulaciones']; ?>">Editar</a>
                    <a href="mantenimientoUsuarios.php?eliminar=<?php echo $row['id_postulaciones']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>
    <br />    
    <a href="opciones.html">Regresar </a>
    <br>
    <br>
    <a href="login.html"> Salir </a>
    <?php
    if (isset($_POST['crear'])) {
        $usuario = $_POST['nuevo_usuario'];
        $contrasenha = $_POST['nueva_contrasenha'];
        $estado = $_POST['nuevo_estado'];

        //sentencia INSERT
        $sentencia = "INSERT into usuario (estado, usuario, contrasenha, usuario_creacion, fecha_creacion)";
        $sentencia .= "              values ('$estado','$usuario', '$contrasenha',  '$usuarioLogin', current_timestamp());";

        //ejecutar la sentencia
        $resultado = mysqli_query($conexion, $sentencia);

        header("location: mantenimientoUsuarios.php");
    }

    if (isset($_POST['actualizar'])) {
        $id_usuario_actualizado = $_POST['id_usuario_actualizado'];
        $usuario = $_POST['editar_usuario'];
        $contrasenha = $_POST['editar_contrasenha'];
        $estado = $_POST['editar_estado'];

        //sentencia UPDATE
        $sentencia = "UPDATE usuario set usuario='$usuario', contrasenha='$contrasenha', estado=$estado,";
        $sentencia .= " usuario_modificacion='$usuarioLogin', fecha_modificacion=current_timestamp()";
        $sentencia .= " WHERE id_usuario=$id_usuario_actualizado;";
        //ejecutar la sentencia
        $resultado = mysqli_query($conexion, $sentencia);

        header("location: mantenimientoUsuarios.php");
    }

    if (isset($_GET['eliminar'])) {
        $usuario_eliminar = $_GET['eliminar'];

        //sentencia UPDATE
        $sentencia = "UPDATE usuario set estado=0, usuario_modificacion='$usuarioLogin', fecha_modificacion=current_timestamp()";
        $sentencia .= " WHERE id_usuario=$usuario_eliminar;";
        //ejecutar la sentencia
        $resultado = mysqli_query($conexion, $sentencia);

        header("location: mantenimientoUsuarios.php");
    }
    ?>

</body>

</html>
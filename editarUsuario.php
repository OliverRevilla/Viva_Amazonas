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
        <font size= 8 color="teal">  PORTAL DE EDICIÓN VIVA AMAZONAS  </font> 
        <br>
        <font size= 6 color="teal">  Modificación de usuario </font> 
        <hr></hr>
    <?php
    session_start(); //recomendación al inicio de las instrucciones php
    $usuarioLogin = $_SESSION['codusr'];

    $conexion = mysqli_connect("127.0.0.1", "root", "", "vive-amazonas");

    //sentencia SELECT
    $id_usuario = $_GET['editar'];  
    $sentencia = "SELECT id_usuario, usuario, contrasenha, estado FROM usuarios WHERE id_usuario=$id_usuario;";

    //ejecutar la sentencia
    $resultado = mysqli_query($conexion, $sentencia);

    $fila = $resultado->fetch_assoc();

    ?>
    <form action="mantenimientoUsuarios.php" method="POST">
        <!-- Guarda el identificador del usuario, pero no se muestra, se utiliza un campo oculto-->
        <input type="hidden" name="id_usuario_actualizado" value="<?php echo $id_usuario; ?>">
        <table border="2">
            <tr>
                <td>Nombre de Usuario</td>
                <td>
                    <input type="text" name="editar_usuario" value="<?php echo $fila['usuario']; ?>">
                </td>
            </tr>
            <tr>
                <td>Contrase&ntilde;a de Usuario</td>
                <td>
                    <input type="password" name="editar_contrasenha" value="<?php echo $fila['contrasenha']; ?>">
                </td>
            </tr>
            <tr>
                <td>Estado de Usuario</td>
                <td>
                    <input type="text" name="editar_estado" value="<?php echo $fila['estado']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Grabar actualizacion de usuario" name="actualizar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
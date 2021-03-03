<html>
<!-- Esta es la pagina donde se puede registrar un nuevo usuario-->
<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Viva Amazonas - Registro de Usuario</title>
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
        <font size= 8 color="teal">PORTAL DE EDICIÓN VIVA AMAZONAS </font> 
        <br>
        <font size=6 color="teal"> Registro Nuevo Usuario </font>
        <hr> </hr>
    
    <!-- Este formulario dirige los datos a mantenimientoUsuario.php mediannte
     la entrada "submit" al final del código-->
    <form action="mantenimientoUsuarios.php" method="POST">
        <table border="1">    <!-- Formato de tabla -->
            <tr>
                <td>Nombre de Usuario</td>
                <td>
                    <input type="text" name="nuevo_usuario">
                </td>
            </tr><tr>
                <td>Id de Usuario</td>
                <td>
                    <input type="text" name="id_usuario">
                </td>
            </tr>
            <tr>
                <td>Contrase&ntilde;a de Usuario</td>
                <td>
                    <input type="password" name="nueva_contrasenha">
                </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Estado de Usuario</td>
                <td>
                    <input type="text" name="nuevo_estado">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Grabar" name="crear">
                </td>
            </tr>
        </table>
    </form>
      <a href = "mantenimientoUsuarios.php" >Regresar </a>
      <br>
      <a href = "login.html">Salir </a>    

        </center>


</body>

</html>


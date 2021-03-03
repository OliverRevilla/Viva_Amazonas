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

    <title>Sistema Web - Viva Amazonas - Registro de Nuevo postulante Ganador</title>
</head>

<body>
    <h1>Registro Nuevo Postulante Ganador</h1>
    <br>
    <hr>
    
    <!-- Este formulario dirige los datos a mantenimientoUsuario.php mediannte
     la entrada "submit" al final del código-->
    <form action="mantenimientoUsuarios.php" method="POST">
        <table border="1">    <!-- Formato de tabla -->
            <tr>
                <td align="left" colspan="4">
                <a href="nuevoConvenio.php"> Nuevo Convenio</a>
                </td>
            </tr>
            <tr>
                <td>Nombre de Postulante Ganador</td>
                <td>
                    <input type="text" name="nuevo_usuario">
                </td>
            </tr><tr>
                <td>Id de Postulante</td>
                <td>
                    <input type="text" name="id_postulante">
                </td>
            </tr>
            <tr>
                <td>Número de convenios</td>
                <td>
                    <input type="number" name="numero_convenios">
                </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Estado del Convenio</td>
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
</body>

</html>


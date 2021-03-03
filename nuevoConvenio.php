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

    <title>Sistema Web - Viva Amazonas - Registro de Convenio</title>
</head>

<body>
    <h1>Registro Nuevo Convenio</h1>
    <br>
    <hr>
    
    <!-- Este formulario dirige los datos a mantenimientoUsuario.php mediannte
     la entrada "submit" al final del código-->
    <form action="mantenimientoUsuarios.php" method="POST">
        <table border="1">    <!-- Formato de tabla -->
            <tr>
                <td align="left" colspan="4">
                <a href="hitos.php"> Hitos</a>
                </td>
            </tr>
            <tr>
                <td>Nombre del Convenio </td>
                <td>
                    <input type="text" name="nuevo_usuario">
                </td>
            </tr><tr>
                <td>Id de Convenio</td>
                <td>
                    <input type="text" name="id_usuario">
                </td>
            </tr>
            <tr>
                <td>Fecha de Inicio</td>
                <td>
                    <input type="datetime" name="fecha_inicio">
                </td>
            </tr>
            <tr>
                <td>Fecha Fin</td>
                <td>
                    <input type="datetime" name="fecha_fin">
                </td>
            </tr>
            <tr>
                <td>Monto Total</td>
                <td>
                    <input type="text" name="monto_total">
                </td>
            </tr>
            <tr>
               <!-- Modificación del estado de usuario a activo-->  
                <td>Estado de Convenio</td>
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


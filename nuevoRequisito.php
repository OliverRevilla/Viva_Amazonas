<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Nombre del Sistema - Nuevo Requisito</title>
</head>

<body>
    <h1>Registro Nuevo Requisito</h1>
    <br>
    <hr>
    <form action="mantenimientoRequisitos.php" method="POST">
        <table border="1">
        
            <tr>
                <td>Descripci&oacuten</td>
                <td>
                    <input type="text" name="nueva_descripcion">
                </td>
            </tr>
            <tr>
                <td>Estado</td>
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
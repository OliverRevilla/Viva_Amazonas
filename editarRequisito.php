<html>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->
    <meta charset="UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">

    <title>Sistema Web - Nombre del Sistema - Modificación de Usuario</title>
</head>

<body>
    <h1>Editar / Modificar Requisito</h1>
    <br />
    <hr />
    <?php
    session_start(); //recomendación al inicio de las instrucciones php
    $usuarioLogin = $_SESSION['codusr'];

    $conexion = mysqli_connect("127.0.0.1", "root", "", "ads-931");

    //sentencia SELECT
    $id_requisitos = $_GET['editar'];
    $sentencia = "SELECT id_requisitos, descripcion, estado FROM requisitos WHERE id_requisitos=$id_requisitos;";

    //ejecutar la sentencia
    $resultado = mysqli_query($conexion, $sentencia);

    $fila = $resultado->fetch_assoc();

    ?>
    <form action="mantenimientoRequisitos.php" method="POST">
        <!-- Guarda la identificador del usuario, pero no se muestra, se utiliza un campo oculto-->
        <input type="hidden" name="id_requisito_actualizado" value="<?php echo $id_requisitos; ?>">
        <table border="1">
            <tr>
                <td>Nombre de Requisito</td>
                <td>
                    <input type="text" name="editar_descripcion" value="<?php echo $fila['descripcion']; ?>">
                </td>
            </tr>
            <tr>
                <td>Estado de Requisito</td>
                <td>
                    <input type="text" name="editar_estado" value="<?php echo $fila['estado']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Grabar actualizacion de requisito" name="actualizar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
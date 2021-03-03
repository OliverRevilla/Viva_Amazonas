<html>
<!DOCTYPE html>
<title> Sistema Web Viva Amazonas </title>

<head>
    <meta charset="UTF-8">
    <!-- Character Set Meta Tag -->

    <meta name="description" content="Web System ... to illustrate the use of ...">
    <meta name="keywords" content="Sistema, Web, ...">
    <meta name="author" content="ACME Software Development Team">
 

</head>
<style type="text/css">
    body {
        background-image: url("fondo.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: rgba(72, 181, 196, 0.904);
    }
    </style>   

<body>

    <center>
        <font size= 18 color="White"> PORTAL DE INGRESO VIVA AMAZONAS </font> 

    
        <br/>

    <!-- Nombre de la página: "PORTAL DE INGRESO VIVA AMAZONAS"-->

    <br>

        
    <form action="login.php" method="POST">
        <p><font size = 4 color="white">Usuario: </font> </p>
            <input type="text" name="usuario">
 
            <p><font size = 4  color="white">Contrase&ntilde;a: </font> </p>
        <input type="password" name="contrasenha">
        <br><br>
        <input type="submit" value = "Validar"> 
    <!-- El "submit" cuyo nombre en la página será "Validar" nos enviará al "login.php"
        , trasladará los datos mediante el método Post. -->

    </center>   

  
</body>


</html>
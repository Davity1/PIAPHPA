<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script src="navbar.js" defer></script>
</head>
<body>
<div id="navbar"></div>
    <div class="contenedor-formularios">
<?php
        $con =mysqli_connect("localhost", "root", "", "enterprise");
        if(!$con){
            die('No se establecio conexion con el servidor.'. mysqli_error());
        }
        $sql="INSERT INTO clientes (nombre, email, telefono, direccion, fecha_registro) 
        VALUES('$_POST[nombre]', '$_POST[email]', '$_POST[telefono]', '$_POST[direccion]', '$_POST[fecha_registro]')";
        if(!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
        {
            die('Error: ' .mysqli_error($con));
        }
        echo "<center>";
        echo "1 registro agregado <br>";
        echo "<a href='insertar_datosE2.html'>Insetar registro</a>";
        echo "<a href='consultarE2'>Ver tabla</a>";
        mysqli_close($con);
        ?>
        </div>
</body>
</html>

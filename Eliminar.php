<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="navbar.js" defer></script>
    <title>Registro borrado</title>
</head>
<body>
<div id="navbar"></div>
<div class="contenedor-formularios">
<?php
$con =mysqli_connect("localhost", "root", "", "enterprise");
echo "<br><center>";
if(!$con){
    die('No se establecio conexion con el servidor.'. mysqli_error());
}
$id_cliente =$_POST ["id_cliente"];
$id_pedido = $_POST ["id_pedido"];
$sql="DELETE FROM clientes WHERE id_cliente = $id_cliente";
$sql1="DELETE FROM clientes WHERE id_cliente = $id_cliente";
if (!$sql || !$sql1) {
    die("Fallo en la consulta: " . mysqli_error($con));
}

echo "Registro borrado<br><br>";
echo "<a href='EliminarE2.html' class='link'>Regresar</a>";
mysqli_close($con);
echo "</center>"
?>
</div>
</body>
</html>

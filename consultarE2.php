<meta charset="8">
<html>
<head>
    <title>Consulta Enterprise</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./styles.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="navbar.js" defer></script>
</head>
<body>
<div id="navbar"></div>
    <div class="contenedor-formularios">
    <center>
        <?php
        $con =mysqli_connect("localhost", "root", "", "enterprise");
        $resulatado = mysqli_query($con, "SELECT * FROM clientes");
        $resulatado2 = mysqli_query($con, "SELECT * FROM factura");
        $resulatado3 = mysqli_query($con, "SELECT * FROM pedidos");
        $resulatado4 = mysqli_query($con, "SELECT * FROM proveedores");

        if (!$resulatado || !$resulatado2 || !$resulatado3 || !$resulatado4) {
            die("Fallo en la consulta: " . mysqli_error($con));
        }
    echo "<h1>1 registro agregado</h1>";
        // Tabla Clientes
        echo "<h1>Tabla Clientes</h1>";
        echo "<table class='cambiar-borde'>
        <tr>
            <th>ID Cliente</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha de Registro</th>
        </tr>";
        while ($row = mysqli_fetch_array($resulatado)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id_cliente'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td align='center'>" . $row['fecha_registro'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Tabla Facturas
        echo "<h1>Tabla Facturas</h1>";
        echo "<table class='cambiar-borde'>
        <tr>
            <th>ID Factura</th>
            <th>Fecha de Factura</th>
            <th>Monto</th>
            <th>Método de Pago</th>
        </tr>";
        while ($row = mysqli_fetch_array($resulatado2)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id_factura'] . "</td>";
            echo "<td>" . $row['fecha_factura'] . "</td>";
            echo "<td>" . $row['monto'] . "</td>";
            echo "<td align='center'>" . $row['metodo_pago'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Tabla Pedidos
        echo "<h1>Tabla Pedidos</h1>";
        echo "<table class='cambiar-borde'>
        <tr>
            <th>ID Pedido</th>
            <th>Fecha de Pedido</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Método de Envío</th>
        </tr>";
        while ($row = mysqli_fetch_array($resulatado3)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id_pedido'] . "</td>";
            echo "<td>" . $row['fecha_pedido'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "<td align='center'>" . $row['metodo_envio'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Tabla Proveedores
        echo "<h1>Tabla Proveedores</h1>";
        echo "<table class='cambiar-borde'>
        <tr>
            <th>ID Proveedor</th>
            <th>Nombre del Proveedor</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha de Registro</th>
        </tr>";
        while ($row = mysqli_fetch_array($resulatado4)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['id_proveedor'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td align='center'>" . $row['fecha_registro'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
echo "<a href='insertar_datosE2.html'><h1 class='link'>Insertar registro</h1></a><br>";
mysqli_close($con);
?>
</div>
    </center>
</body>
</html>
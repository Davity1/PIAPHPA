<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="navbar.js" defer></script>
    <title>Actualizar</title>
</head>
<body>
<div id="navbar"></div>
    <div class="contenedor-formularios">
    <?php
        $con =mysqli_connect("localhost", "root", "", "alumnos");
        $MATRICULA =$_POST['id'];
        $resulatado = mysqli_query($con, "SELECT * FROM datos WHERE id_matricula = $MATRICULA");
        if ($resulatado === FALSE){
            echo "fallo";
            die(mysqli_error($con));
        }
        echo "<center>";
        echo "<form action='Actualizar3.php' method='POST'>";
        echo "<h1>Editar Datos</h1>";
        echo "<table class='cambiar-borde'>";
        while($row=mysqli_fetch_array($resulatado)){
            echo "<tr>";
            echo "<td>Matricula:<td>"; echo "<td><input type='text' name='id' value=". $row['id_matricula']."></td></tr>";
            echo "<tr>";
            echo "<td>Nombre:<td>"; echo "<td><input type='text' name='nomre' value=". $row['nombre']."></td></tr>";
            echo "<tr>";
            echo "<td>Apellidos:<td>"; echo "<td><input type='text' name='apellidos' value=". $row['apellidos']."></td></tr>";
            echo "<tr>";
            echo "<td>Edad:<td>"; echo "<td><input type='text' name='edad' value=". $row['edad']."></td></tr>";
        }
        echo "</table>";
        mysqli_close($con);
        echo "<input type='submit' value='Actualizar' class='enviar'>";
        echo "</form>";
    ?>
    </diV>
</body>
</html>
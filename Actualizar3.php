<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
    $con = mysqli_connect("localhost", "root", "", "alumnos");
    
    if (!$con) {
        echo "Fallo ";
        die(mysqli_error($con));
    }

    // Recibe datos del formulario
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $APELLIDOS = $_POST['apellidos'];
    $EDAD = $_POST['edad'];

    // Ejecuta la consulta de actualización
    $sql = "UPDATE datos 
            SET id_matricula='$ID', nombre='$NOMBRE', apellidos='$APELLIDOS', edad='$EDAD' 
            WHERE id_matricula='$ID'";

    if (mysqli_query($con, $sql)) {
        echo "Datos actualizados exitosamente.";
    } else {
        echo "Error al actualizar datos: " . mysqli_error($con);
    }
        // Redirección a la página inicial
        header("Location: Actualizar1.php"); 

    // Cierra la conexión
    mysqli_close($con);
?>
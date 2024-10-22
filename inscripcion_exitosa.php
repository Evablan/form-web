<!--Verificamos que los datos se reciban bien -->
<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$deporte = $_POST['deporte'];
$nivel = $_POST['nivel'];
$icono = $_POST['icono'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion exitosa</title>
</head>
<body>
<?php
    include "includes/header.php";
?>
    <h1>Inscripcion exitosa</h1>
    <p>El participante <strong><?php htmlspecialchars($nombre);?> ha sido inscrito correctamente</strong></p>
    <p>Edad : <?php echo htmlspecialchars($edad); ?> <?php echo htmlspecialchars($icono);?></p>
    <p>Deporte favorito: <?php echo htmlspecialchars($deporte);?></p>
    <p>Nivel de habilidad: <?php echo htmlspecialchars($nivel);?></p>
    <a href="inscripcion.php">Volver al formulario de inscripción</a>

    <?php
    include "includes/footer.php";
?>
</body>
</html>
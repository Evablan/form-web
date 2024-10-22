<!--Recibimos la información del formulario -->

<?php
//Verificamos que se están recibiendo bien los datos del formulario
if(isset($_POST['nombre'])&& isset($_POST['edad']) && isset($_POST['deporte']) && isset($_POST['nivel'])){


//Obtenemos los datos enviados por el formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$deporte = $_POST['deporte'];
$nivel = $_POST['nivel'];
}
$icono="";

if($edad < 12 ){
    $icono = "🧒";

}elseif($edad >= 12 && $edad <=18){
    $icono = "🏃‍♂️";
}else{
    $icono="💪";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de inscripción</title>
</head>
<body>
    <?php
    include "includes/header.php";


?>
    <h1>Confirmación de inscripción</h1>
    <p><strong>Nombre: </strong></p><?php echo htmlspecialchars($nombre); ?></p>
    <p><strong>Edad: </strong></p><?php echo htmlspecialchars($edad);?> <?php echo htmlspecialchars($icono);?></p>
    <p><strong>Deporte favorito: </strong></p><?php echo htmlspecialchars($deporte); ?></p>
    <p><strong>Nivel de habilidad: </strong></p><?php echo htmlspecialchars($nivel); ?></p>

    <form action = "inscripcion_exitosa.php" method="POST">
         <!-- Enviamos los datos a inscripción_exitosa.php -->
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <input type="hidden" name="edad" value="<?php echo htmlspecialchars($edad); ?>">
        <input type="hidden" name="deporte" value="<?php echo htmlspecialchars($deporte); ?>">
        <input type="hidden" name="nivel" value="<?php echo htmlspecialchars($nivel); ?>">
        <input type="hidden" name="icono" value="<?php echo htmlspecialchars($icono); ?>">

        <button type="submit">Confirmar </button>
        <button type="button" onclick="window.history.back()">Cancelar</button>
    </form>
    <?php
    include "includes/footer.php";


?>
    
</body>
</html>
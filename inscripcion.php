<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción al Evento Deportivo</title>
</head>
<body>
    <?php
    include "includes/header.php"; //Incluimos la cabecera

    ?>
    
<div class="container mt-5"> <!-- Contenedor Bootstrap -->
    <div class="row justify-content-center"> <!-- Fila centrada -->
        <div class="col-md-6"> <!-- Columna que ocupa 6 de 12 -->
            <div class="card shadow"> <!-- Tarjeta con sombra -->
                <div class="card-header bg-violeta text-white text-center">
                    <h4>Formulario de Inscripción</h4>
                </div>
                <div class="card-body">
                    <form action="confirmacion.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad:</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="deporte" class="form-label">Deporte favorito:</label>
                            <select id="deporte" name="deporte" class="form-select" required>
                                <option value="futbol">Fútbol</option>
                                <option value="baloncesto">Baloncesto</option>
                                <option value="natacion">Natación</option>
                                <option value="ciclismo">Ciclismo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nivel" class="form-label">Nivel de habilidad:</label>
                            <select id="nivel" name="nivel" class ="form-select" required>
                                <option value="avanzado">Avanzado</option>
                                <option value="intermedio">Intermedio</option>
                                <option value="basico">Básico</option>

                            </select>
                            
                        </div>
                        <button type="submit" class="btn btn-violeta w-100">Enviar</button> <!-- Botón estilizado -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include "includes/footer.php";
?>
    
</body>
</html>
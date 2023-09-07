<?php
// Obtener el valor de ventas del formulario
$ventas = $_POST['ventas'];

// Determinar el indicador de desempeño
if ($ventas > 80) {
    $indicador = "feliz";
    $imagen = "feliz.png";
} elseif ($ventas >= 50 && $ventas <= 79) {
    $indicador = "regular";
    $imagen = "regular.png";
} else {
    $indicador = "triste";
    $imagen = "triste.png";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Desempeño</title>
</head>
<body>

    <div class="content">
        <h2>Resultado de Desempeño</h2>
        <p>Indicador de ventas: <?php echo $indicador; ?></p>
        <img src="<?php echo $imagen; ?>" alt="<?php echo $indicador; ?>">
    </div>

</body>
</html>

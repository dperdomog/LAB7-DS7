<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número del formulario
    $numero = $_POST['numero'];

    // Función para calcular el factorial
    function calcularFactorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * calcularFactorial($n - 1);
        }
    }

    // Calcular el factorial
    $factorial = calcularFactorial($numero);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Factorial</title>
</head>
<body>

    <div class="content">
        <h2>Resultado del Factorial</h2>
        <?php if (isset($factorial)): ?>
            <p>El factorial de <?php echo $numero; ?> es <?php echo $factorial; ?></p>
        <?php else: ?>
            <p>Ingrese un número válido.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
// Generar 20 números diferentes
$valores = array();
while (count($valores) < 20) {
    $numero = rand(1, 100); // Genera un número aleatorio entre 1 y 100

    // Verificar que el número no esté en el arreglo
    if (!in_array($numero, $valores)) {
        $valores[] = $numero;
    }
}

// Encontrar el elemento mayor
$maximo = max($valores);
$posicion = array_search($maximo, $valores);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Elemento mayor: <?php echo $maximo; ?></p>
    <p>Posición del elemento mayor: <?php echo $posicion; ?></p>
</body>
</html>

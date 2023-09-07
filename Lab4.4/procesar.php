<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cantidad de números pares a ingresar desde el formulario
    $cantidad = $_POST['cantidad'];

    // Crear un arreglo para almacenar números pares
    $arregloPares = array();
    $contador = 0;

    // Definir una función para verificar si un número es par
    function esPar($numero) {
        return $numero % 2 == 0;
    }

    // Llenar el arreglo con números pares
    while ($contador < $cantidad) {
        $valor = intval(readline("Ingrese un número par: "));

        if (esPar($valor)) {
            $arregloPares[] = $valor; // Agregar el número par al arreglo
            $contador++;
        } else {
            echo "El número ingresado no es par. Por favor, ingrese un número par.\n";
        }
    }

    // Mostrar el arreglo resultante
    echo "Arreglo de números pares: ";
    print_r($arregloPares);
}
?>

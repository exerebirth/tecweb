<!DOCTYPE html>
<html>
<head>
    <title>Generación de Secuencia</title>
</head>
<body>
<?php

$matrix = array(); // Matriz para almacenar los números
$iterations = 0; // Contador de iteraciones
$totalNumbers = 0; // Contador de números generados

while (true) {
    $randomNumbers = array(); // Array para almacenar los 3 números aleatorios

    // Genera 3 números aleatorios y los almacena en $randomNumbers
    for ($i = 0; $i < 3; $i++) {
        $randomNumbers[] = rand(1, 1000); // Genera números aleatorios entre 1 y 1000
        $totalNumbers++;
    }

    // Comprueba si la secuencia es "impar, par, impar"
    if ($randomNumbers[0] % 2 != 0 && $randomNumbers[1] % 2 == 0 && $randomNumbers[2] % 2 != 0) {
        $matrix[] = $randomNumbers; // Almacena la secuencia en la matriz
        break; // Sal del bucle si se cumple la condición
    }

    $iterations++;
}

// Muestra la matriz resultante
echo "Matriz resultante:\n";
foreach ($matrix as $row) {
    echo implode(', ', $row) . "\n";
}

// Muestra el número de iteraciones y la cantidad de números generados
echo "Número de iteraciones: $iterations"."<br>";
echo "Cantidad de números generados: $totalNumbers"."<br>";
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Encontrar Múltiplo</title>
</head>
<body>
<?php
if (isset($_GET['numero_dado'])) {
    // Paso 1: Obtener el número dado desde $_GET
    $numero_dado = intval($_GET['numero_dado']);

    // Paso 2: Inicializar una variable para el número aleatorio
    $numero_aleatorio = 0;

    // Paso 3: Usar un bucle while para encontrar el primer múltiplo
    while (true) {
        $numero_aleatorio = rand(1, 100); // Genera un número aleatorio entre 1 y 100

        if ($numero_aleatorio % $numero_dado == 0) {
            break; // Si es múltiplo, sale del bucle
        }
    }

    // Paso 4: Mostrar el primer múltiplo encontrado
    echo "El primer múltiplo de $numero_dado es: $numero_aleatorio";
} else {
    echo "Por favor, proporciona un número dado como parámetro en la URL"."\n";
}
?>
</body>
</html>
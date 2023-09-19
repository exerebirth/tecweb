<!DOCTYPE html>
<html>
<head>
    <title>Encontrar Múltiplo (do-while)</title>
</head>
<body>
<?php
if (isset($_GET['numero_do'])) {
    // Paso 1: Obtener el número dado desde $_GET
    $numero_do = intval($_GET['numero_do']);

    // Paso 2: Inicializar una variable para el número aleatorio
    $numero_aleatorio = 0;

    // Paso 3: Usar un bucle do-while para encontrar el primer múltiplo
    do {
        $numero_aleatorio = rand(1, 100); // Genera un número aleatorio entre 1 y 100
    } while ($numero_aleatorio % $numero_do != 0);

    // Paso 4: Mostrar el primer múltiplo encontrado
    echo "El primer múltiplo de $numero_do es: $numero_aleatorio";
} else {
    echo "Por favor, proporciona un número do como parámetro en la URL"."<br>";
}
?>
</body>
</html>
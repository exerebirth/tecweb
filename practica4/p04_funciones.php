<!DOCTYPE html>
<html>
<head>
    <title>practica 4</title>
</head>
<body>
<?php
// Paso 1: Obtener el valor del número desde $_GET
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    // Paso 2: Verificar si es múltiplo de 5 y 7
    if ($numero % 5 == 0 && $numero % 7 == 0) {
        echo "El número $numero es múltiplo de 5 y 7.";
    } else {
        echo "El número $numero no es múltiplo de 5 y 7.";
    }
} else {
    echo "Por favor, proporciona un número como parámetro en la URL"."<br>";
    
}
include('ciclo-while.php');
include('secuencias.php');
include('do-while.php');
include('Ascii.php');
?>

</body>
</html>
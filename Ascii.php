<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Letras</title>
</head>
<body>
<?php
// Paso 1: Crear el arreglo con un ciclo for
$arreglo = array();
for ($i = 97; $i <= 122; $i++) {
    $letra = chr($i); // Convierte el código ASCII en letra
    $arreglo[$i] = $letra; // Asigna la letra al índice correspondiente
}

// Paso 2: Crear una tabla XHTML con un ciclo foreach
echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Letra</th></tr>";

foreach ($arreglo as $indice => $letra) {
    echo "<tr><td>$indice</td><td>$letra</td></tr>";
}

echo "</table>";
?>
</body>
</html>
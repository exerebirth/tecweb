<!DOCTYPE html>
<html>
<head>
    <title>practica 4</title>
</head>
<body>
<?php
// Arreglo asociativo para el parque vehicular
$parqueVehicular = array(
    'UBN6338' => array(
        'Auto' => array(
            'marca' => 'HONDA',
            'modelo' => '2020',
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Alfonzo Esparza',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'C.U., Jardines de San Manuel'
        )
    ),
    'UBN6339' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ma. del Consuelo Molina',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '97 oriente'
        )
    )
);

// Mostrar la estructura general del arreglo
echo "<pre>";
print_r($parqueVehicular);
echo "</pre>";

// Formulario para consultar información
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricula = strtoupper($_POST['matricula']);
    
    if (isset($parqueVehicular[$matricula])) {
        echo "<h2>Información del vehículo con matrícula $matricula</h2>";
        echo "<pre>";
        print_r($parqueVehicular[$matricula]);
        echo "</pre>";
    } else {
        echo "<h2>No se encontró información para la matrícula $matricula</h2>";
    }
}
?>
</body>
</html>
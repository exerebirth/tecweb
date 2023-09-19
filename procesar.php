<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
<?php
if (isset($_POST['edad']) && isset($_POST['sexo'])) {
    $edad = intval($_POST['edad']);
    $sexo = $_POST['sexo'];

    if ($sexo === 'femenino' && $edad >= 18 && $edad <= 35) {
        echo "Bienvenida, usted está en el rango de edad permitido.";
    } else {
        echo "Lo sentimos, no cumple con los requisitos.";
    }
} else {
    echo "Por favor, complete el formulario.";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Potencia sin pow()</title>
<style>
body{font-family:Arial;background:#f4f4f4;padding:20px}
form,.resultado{background:white;padding:15px;border-radius:8px;margin-top:15px}
</style>
</head>
<body>

<h2>Cálculo de Potencia</h2>

<form method="post">
Número base:
<input type="number" step="any" name="base" required><br><br>

Exponente:
<input type="number" name="exponente" required><br><br>

<button type="submit" name="calcular">Calcular</button>
</form>

<?php
if(isset($_POST["calcular"])){

    $base = floatval($_POST["base"]);
    $exp = intval($_POST["exponente"]);

    $resultado = 1;

    for($i = 0; $i < abs($exp); $i++){
        $resultado *= $base;
    }

    if($exp < 0){
        $resultado = 1 / $resultado;
    }

    echo "<div class='resultado'>";
    echo "<strong>Resultado:</strong> $base ^ $exp = $resultado";
    echo "</div>";
}
?>

</body>
</html>
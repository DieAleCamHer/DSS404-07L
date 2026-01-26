<?php
$euros = "";
$dolares = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["dolares"])) {
        $error = "Debe ingresar una cantidad.";
    } elseif (!is_numeric($_POST["dolares"]) || $_POST["dolares"] <= 0) {
        $error = "Ingrese un valor numérico válido.";
    } else {
        $dolares = $_POST["dolares"];
        $euros = $dolares * 0.92;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Moneda</title>
</head>
<body>

<h2>Conversión de Dólares a Euros</h2>

<form method="post">
    <label>Ingrese la cantidad en dólares:</label><br>
    <input type="text" name="dolares">
    <br><br>
    <input type="submit" value="Convertir">
</form>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}

if ($euros != "") {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Dólares</th><th>Euros</th></tr>";
    echo "<tr><td>$dolares</td><td>".number_format($euros,2)."</td></tr>";
    echo "</table>";
}
?>

</body>
</html>

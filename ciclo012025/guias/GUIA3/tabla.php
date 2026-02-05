<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tabla de multiplicar</title>
<style>
body{font-family:Arial;background:#eef;padding:20px}
table{border-collapse:collapse;margin-top:15px}
td,th{border:1px solid #333;padding:8px;text-align:center}
</style>
</head>
<body>

<h2>Tabla de multiplicar</h2>

<form method="post">
Ingrese un número (1–10):
<input type="number" name="num" min="1" max="10" required>
<button type="submit">Mostrar</button>
</form>

<?php
if($_POST){
    $n = $_POST["num"];

    echo "<table>";
    echo "<tr><th colspan='2'>Tabla del $n</th></tr>";

    for($i=1;$i<=10;$i++){
        echo "<tr><td>$n x $i</td><td>".($n*$i)."</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
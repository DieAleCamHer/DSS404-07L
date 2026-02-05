<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h2>Faactorial de un número</h2>

    <form method="POST">
        Número entero:
        <input type="number" name="entero" required><br><br>

        <button type="submit" name="calcular">Calcular</button><br><br>
    </form>

    <?php
    if(isset($_POST["calcular"])){

        $ent = intval($_POST["entero"]);
        $fact = $ent;

        $resultado = 1;

        if ($ent >= 0) {
            for ($i = $ent; $i >= 1; $i--) { 
                $resultado *= $i;
            }
            echo "<div>";
            echo "<strong>El factorial de:</strong> $fact = $resultado";
            echo "</div>";
        } else {
            echo "<div>";
            echo "Ingrese un valor igual o mayor a cero";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
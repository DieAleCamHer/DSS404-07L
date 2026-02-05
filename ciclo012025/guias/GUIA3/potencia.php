<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia</title>
</head>
<body>
    <h2>Cálculo de Potencia</h2>

    <form method="post">
        Nùmero base:
        <input type="number" name="base" required><br><br>

        Exponente (entero):
        <input type="number" name="exponente" required><br><br>

        <button type="submit">Calcular</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == $_POST){
        $base = $_POST["base"];
        $exp = $_POST["exponente"];
        $resultado = 1;

        for ($i=0; $i < abs($exp); $i++) { 
            $resultado *= $base;
        }

        if($exp < 0){
            $resultado = 1/$resultado;
        }

        echo "<div>";
        echo "Resultado: $base ^ $exp = $resultado";
        echo "</div>";
    }
    ?>
</body>
</html>
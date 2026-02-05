<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma pares</title>
</head>
<body>
    <h2>Ingrese un numero entero</h2>

    <form method="POST">
        Numero entero:
        <input type="number" name="ent" required>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if(isset($_POST["calcular"])){
        $ent = $_POST["ent"];

        $suma = 0;

        if ($ent > 0) {
            echo "<table>";
            echo "<tr><th>Lista de los numeros pares</th></tr>";

            for ($i=1; $i <= $ent; $i++) { 
                if ($i % 2 == 0) {
                    $suma += $i;

                    echo "<tr><th>$i</th></tr>";
                }
            }
            echo "<tr><th>La suma de los numeros pares es: $suma</th></tr>";
            echo "</table>";
        } else {
            echo "Ingrese un número entero mayor a cero";
        }
    }
    ?>
    
</body>
</html>
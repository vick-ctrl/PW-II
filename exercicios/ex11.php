<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <h1>Classificação de Triângulo</h1>
    <form action="ex11.php" method="get">
        <label for="ladoA">Lado A:</label>
        <input type="number" id="ladoA" name="ladoA" required><br><br>

        <label for="ladoB">Lado B:</label>
        <input type="number" id="ladoB" name="ladoB" required><br><br>

        <label for="ladoC">Lado C:</label>
        <input type="number" id="ladoC" name="ladoC" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_GET['ladoA']) && isset($_GET['ladoB']) && isset($_GET['ladoC'])) {
        $ladoA = (int) $_GET['ladoA'];
        $ladoB = (int) $_GET['ladoB'];
        $ladoC = (int) $_GET['ladoC'];

        if (($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA)) {
           
            if ($ladoA == $ladoB && $ladoB == $ladoC) {
                echo "O triângulo é Equilátero!";
            } elseif ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) {
                echo "O triângulo é Isósceles!";
            } else {
                echo "O triângulo é Escaleno!";
            }
        } else {
        
            echo "Os lados informados não formam um triângulo válido.";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação de Números</title>
</head>
<body>
    <h1>Ordenação de Três Valores Inteiros</h1>
    <form action="ex9.php" method="get">
        <label for="valor1">Primeiro Valor:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Segundo Valor:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Terceiro Valor:</label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <input type="submit" value="Ordenar">
    </form>

    <?php
    if (isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['valor3'])) {
        $valor1 = (int) $_GET['valor1'];
        $valor2 = (int) $_GET['valor2'];
        $valor3 = (int) $_GET['valor3'];

        $valores = array($valor1, $valor2, $valor3);

        sort($valores);

        echo "<h2>Valores Ordenados:</h2>";
        echo "<p>" . implode(", ", $valores) . "</p>";
    }
    ?>
</body>
</html>

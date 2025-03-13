
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Avaliação</title>
</head>
<body>
    <h1>Resultado da Avaliação do Aluno</h1>
    <form action="ex13.php" method="get">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="portugues">Nota de Português:</label>
        <input type="number" id="portugues" name="portugues" step="0.01" required><br><br>

        <label for="matematica">Nota de Matemática:</label>
        <input type="number" id="matematica" name="matematica" step="0.01" required><br><br>

        <label for="ingles">Nota de Inglês:</label>
        <input type="number" id="ingles" name="ingles" step="0.01" required><br><br>

        <label for="informatica">Nota de Informática:</label>
        <input type="number" id="informatica" name="informatica" step="0.01" required><br><br>

        <label for="frequencia">Frequência (%):</label>
        <input type="number" id="frequencia" name="frequencia" step="0.01" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nome = $_GET['nome'];
        $portugues = $_GET['portugues'];
        $matematica = $_GET['matematica'];
        $ingles = $_GET['ingles'];
        $informatica = $_GET['informatica'];
        $frequencia = $_GET['frequencia'];
        
        $media = ($portugues + $matematica + $ingles + $informatica) / 4;
        
        if ($media >= 7 && $frequencia >= 75) {
            $status = "Aprovado";
        } elseif ($media < 7) {
            $status = "Reprovado por média";
        } elseif ($frequencia < 75) {
            $status = "Reprovado por frequência";
        }
        }
    if (isset($status)) {
        echo "<h2>Aluno: $nome</h2>";
        echo "<p>Média das Notas: $media</p>";
        echo "<p>Frequência: $frequencia%</p>";
        echo "<h3>Status: $status</h3>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Bônus de Vendas</title>
</head>
<body>
    <h1>Cálculo do Bônus do Vendedor</h1>
    <form action="ex8.php" method="get">
        <label for="nome">Nome do Vendedor:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="vendas">Valor das Vendas (R$):</label>
        <input type="number" id="vendas" name="vendas" required><br><br>

        <input type="submit" value="Calcular Bônus">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $nome = $_GET['nome'];
        $vendas = $_GET['vendas'];


        if ($vendas < 1000) {
            $bonus = 0;
        } elseif ($vendas >= 1000 && $vendas <= 2000) {
            $bonus = $vendas * 0.30; 
        } elseif ($vendas > 2000 && $vendas <= 5000) {
            $bonus = $vendas * 0.20; 
        } else {
            $bonus = $vendas * 0.10; 
        }
        echo "Resultado";
        echo "Nome do Vendedor: $nome";
        echo "Valor das Vendas: R$ " . number_format($vendas, 2, ',', '.');
        echo "Bônus: R$ " . number_format($bonus, 2, ',', '.');
    }
    ?>
</body>
</html>

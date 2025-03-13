
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Calculadora de Operações Aritméticas</h1>
    <form action="ex12.php" method="get">
        <label for="valor1">Digite o primeiro valor:</label>
        <input type="number" step="any" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Digite o segundo valor:</label>
        <input type="number" step="any" id="valor2" name="valor2" required><br><br>

        <label for="operador">Escolha um operador (+, -, *, /):</label>
        <input type="text" id="operador" name="operador" maxlength="1" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $operador = $_GET['operador'];
        
     
        $resultado = 0;
        
        switch ($operador) {
        case '+':
            $resultado = $valor1 + $valor2;
            break;
            case '-':
            $resultado = $valor1 - $valor2;
            break;
            case '*':
            $resultado = $valor1 * $valor2;
            break;
            case '/':
                    
    if ($valor2 != 0) {
        $resultado = $valor1 / $valor2;
    } else {
        $erro = "Erro: Não é possível dividir por zero!";
    }
    break;
    default:
    $erro = "Operador inválido!";
    break;
    }
    }
    if (isset($erro)) {
                echo "<p style='color:red;'>$erro</p>";
    } elseif (isset($resultado)) {
                echo "<h2>Resultado: $resultado</h2>";
    }
?>
</body>
</html>

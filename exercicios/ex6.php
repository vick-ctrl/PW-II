
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
<form action="ex6.php" method="get">
<fieldset>
        <legend>Informe um número</legend>
        <label for="num1">Número 1</label>
        <input type="text" name="num1" id="num1" placeholder="1° número" required>
        <br>             
        <label for="num2">Informe o segundo número:</label>
        <input type="text" name="num2" id="num2" placeholder="2° número" required>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php    
    $num1 = intval($_GET['num1']); 

    $num2 = intval($_GET['num2']);

    if (($_GET['num1'] > (($_GET['num2'])))){        
        echo "O número $num1 é o maior valor";    
    }else if (($_GET['num2'] > (($_GET['num1'] )))){   
        echo "O número $num2 é o maior valor";
    }else if (($_GET['num1'] === (($_GET['num2'])))){    
        echo "Os dois números são iguais";}
        else {  
        echo "Por favor, digite dois números válidos.";}        
    ?>
</body>
</html>
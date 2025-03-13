<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<form action="ex3.php" method="get">
<fieldset>
        <legend>Informe um número</legend>
        <label for="num">Número</label>
        <input type="text" name="num" id="num" placeholder="número">
        <br>
        <br>
        <input type="submit" value="Enviar">
</fieldset>
</form>
<?php   
    $num = intval($_GET['num']); 

    if (($_GET['num'] > 100)){   
        echo "$num é maior que 100"; 
    }else if (($_GET['num'] < 100)){  
        echo "$num é menor que 100";   
    }else{ 
        echo "$num é 100";
    }    
?>
</body>
</html>
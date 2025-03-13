
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<form action="ex4.php" method="get">
<fieldset>
        <legend>Informe o número</legend>
        <label for="mes">Número do Mês</label>
        <input type="text" name="mes" id="mes" placeholder="Mês">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php    
    $mes = intval($_GET['mes']); 
           
    if(($_GET['mes'] === '1' ||      
    (($_GET['mes'] === '2' ||      
    (($_GET['mes'] === '3' ||      
    (($_GET['mes'] === '4' ||      
    (($_GET['mes'] === '5' ||      
    (($_GET['mes'] === '6')))))))))))) {        
        echo "O mês $mes pertence ao primeiro semestre";              
    }else if (($_GET['mes'] === '7' ||      
    (($_GET['mes'] === '8' ||      
    (($_GET['mes'] === '9' ||      
    (($_GET['mes'] === '10' ||      
    (($_GET['mes'] === '11' ||      
    (($_GET['mes'] === '12')))))))))))) {        
        echo "O mês $mes pertence ao segundo semestre";      
    }else {        
        echo "Por favor, digite apenas números.";      
    }          
    ?>
</body>
</html>
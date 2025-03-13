
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
<form action="ex7.php" method="get">
<fieldset>
        <legend>Informe o ano</legend>
        <label for="data">Ano</label>
        <input type="text" name="data" id="data" placeholder="ano">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php        
    $data = intval($_GET['data']); 

    if (($_GET['data'] <= '2007')){        
        echo "você nasceu em $data e é maior de idade.";    
    }else {      
        echo "Você nasceu em $data e é menor de idade.";    
    }    
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
<form action="ex5.php" method="get">
<fieldset>
        <legend>Informe a letra</legend>
        <label for="letra">Letra</label>
        <input type="text" name="letra" id="letra" placeholder="letra">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php   
    $letra = ($_GET['letra']);

    if (($_GET['letra'] === 'a' ||  
    (($_GET['letra'] === 'e' ||  
    (($_GET['letra'] === 'i' ||  
    (($_GET['letra'] === 'o' ||  
    (($_GET['letra'] === 'u' )))))))))) {                
        echo "A letra é uma vogal";            
    } else {                
        echo "A letra é uma consoante";           
    }   
     ?>
</body>
</html>
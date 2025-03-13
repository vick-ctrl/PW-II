
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
<form action="ex1.php" method="get">
<fieldset>
        <legend>Informe a nota</legend>
        <label for="nota">Nota</label>
        <input type="text" name="nota" id="nota" placeholder="nota">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php
   $nota = $_GET['nota'];
   
   if ($_GET['nota'] > 7) {
       echo "Aprovado";
    }else if($_GET['nota'] >= 6){
        echo "Recuperação";
    }else{
        echo "Reprovado";
    }
    ?>
</body>
</html>
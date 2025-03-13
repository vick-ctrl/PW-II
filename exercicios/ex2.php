<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form action="ex2.php" method="get">
<fieldset>
        <legend>Informe idade</legend>
        <label for="idade">idade</label>
        <input type="text" name="idade" id="idade" placeholder="idade">
        <br>
        <br>
        <input type="submit" value="Enviar">
</fieldset>
</form>
<?php
$idade = $_GET['idade'];

if ($_GET['idade'] >= 18) {
    echo "Pode votar";
}else if($_GET['idade'] < 16){
    echo "Não pode votar";
}else{
    
    echo "Insira uma idade válida";
}
?>
</body>
</html>
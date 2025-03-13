<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
<form action="ex10.php" method="get">
<fieldset>
        <legend>Informe o usuário</legend>
        <input type="text" name="usu" id="usu" placeholder="Nome de usuário" required>
        <br>            
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" placeholder="Senha" required>
        <br>
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <?php    
    if (($_GET['usu'] === 'Admin' && (($_GET['senha']=== '123')))){       
        echo "Conectado com sucesso!";    
    }else{    
        echo "Acesso negado! Usuário ou senha incorretos! ";    
    }    
    ?>
</body>
</html>
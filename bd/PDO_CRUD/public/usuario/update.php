<?php
   include '../../config/connection.php';

  
   if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $id = isset($_GET['id']) ? $_GET['id'] : exit();

if(empty($id)){
    echo 'o id é obrigatorio !';
    exit();
}
//prepare e execute sempre juntos quando tem um tem o outro

  $stmt = $pdo->prepare('SELECT * FROM usuario WHERE id = :id ');
  $stmt->bindParam(':id',$id);
  $stmt->execute();
  $usuario = $stmt->fetchAll();
};

   
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;


    if(empty($id)){
        echo "id é obrigatório";
        exit();
    }
    if(empty($username)){
        echo "o nome de usuario é obrigatorio ";
        exit();

    }
    if(empty($password)){
        echo "favor digitar a senha !";
        exit();
    }
    $stmt = $pdo->prepare('UPDATE usuario SET username = :username,password = :password WHERE id = :id');
    stmt->bindParam(':id',$id);
    stmt->bindParam(':username',$username);
    stmt->bindParam(':password',$password);
    stmt->execute();

   };




?>

<form action="update.php" method ="POST">
    <input type="hidden"  name="id" value="<?php echo  $usuario[0]['id']; ?>">
  <label for="username">nome de usuario</label>
  <input type="text" name=username id="username" value="<?php echo $usuario[0]['username'];?>">
   <br><br>
  <label for="password">senha</label>
  <input type="password" name="password" id="password">
  <br><br>
  <button type= "submit">atualizar</button>

</form>
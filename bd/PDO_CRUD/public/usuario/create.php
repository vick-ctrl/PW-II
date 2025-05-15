<?php
   include '../../config/connection.php';
?> 

<form action="create.php" method ="POST">
  <label for="username">nome de usuario</label>
  <input type="text" name=username id="username">
   <br><br>
  <label for="password">senha</label>
  <input type="password" name="password" id="password">
  <br><br>
  <button type= "submit">cadastrar</button>

</form>

<?php 
  
  $username = isset($_POST['username']) ? $_POST['username'] : exit();
  $password = isset($_POST['password']) ? $_POST['password'] : exit();

  $stmt = $pdo->prepare('INSERT INTO usuario (username,password) VALUE (:username, :password)');
  $stmt->bindParam(':username',$username);
  $stmt->bindParam(':password',$password);
  $stmt->execute();

  Header("Location: read.php");
?>
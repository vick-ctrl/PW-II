<?php
   
   include '../../includes/header.php';
   include '../../includes/menu.php';
   include '../../config/connection.php';
   
?> 
<div class="container-fluid">
  <div class="row d-flex justify-content-center ">
    <div class="col-12 col-lg-8 p-4 shadow rounded">
      
    <form action="create.php" method ="POST" >
  <div class="mb-3">
    <label for="username" class="form-label">nome de usuario</label>
  <input type="text" name=username id="username" class="form-control">
  </div>
  
   <div class="mb-3">
    <label for="password" class="form-label">senha</label>
  <input type="password" name="password" id="password" class="form-control">
</div>
  
  <button type= "submit" class="btn btn-dark">cadastrar</button>

</form>
    </div>
  </div>
</div>



<?php 
  
  $username = isset($_POST['username']) ? $_POST['username'] : exit();
  $password = isset($_POST['password']) ? $_POST['password'] : exit();

  $stmt = $pdo->prepare('INSERT INTO usuario (username,password) VALUE (:username, :password)');
  $stmt->bindParam(':username',$username);
  $stmt->bindParam(':password',$password);
  $stmt->execute();

  Header("Location: read.php");
?>

<?php include '../../includes/footer.php';?>
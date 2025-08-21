<?php 
$host = 'localhost'; 
$datebase = 'sistema_ebooks'; 
$user = 'root'; 
$password = ''; 

try{
    $pdo = new PDO("mysql:host=$host;dbname=$datebase;charset=utf8",$user,$password); //resp por conectar o banco de dados

}catch(PDOException $erro){
    die("erro de conexão : " . $erro->getMessage());
}


?>
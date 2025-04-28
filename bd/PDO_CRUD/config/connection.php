<?php 
//config de conexao com BD
$host = 'localhost'; //quem vai conectar
$datebase = 'escola'; //qual banco de dados
$user = 'root'; //usuario
$password = ''; // senha 

try{
    $pdo = new PDO("mysql:host=$host;dbname=$datebase;charset=utf8",$user,$password); //resp por conectar o banco de dados

}catch(PDOException $erro){
    die("erro de conexão : " . $erro->getMessage());
}


?>
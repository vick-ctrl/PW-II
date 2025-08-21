<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo; //admin ou comum



public function __construct($nome,$email,$senha,$tipo){
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->tipo = $tipo;

}

public function inserir($nome, $email, $senha, $tipo){ 
    $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->execute();
}

public function buscar($id){
    $stmt = $pdo->query("SELECT * FROM usuario WHERE id = $id");
	$usuarios= $stmt->fetchAll();

 }

public function buscarTodos(){
	$stmt = $pdo->query("SELECT * FROM usuario");
	$usuarios= $stmt->fetchAll();

}

public function atualizar($id,$nome,$email,$senha,$tipo){
    $stmt = $pdo->prepare("UPDATE pessoas SET nome = :nome , email = :email , senha = :senha , tipo = :tipo  WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':tipo', $tipo);
   
    $stmt->execute();
}

public function login(){}

public function logout(){}

}

?>
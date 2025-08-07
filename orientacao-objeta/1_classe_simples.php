<?php
  class Pessoa {
    //Opcoes de encapsulamento
    //public -  a variavel é acessivel de fora da classe 
    //privade - é acessivel somente dentro da classe 
    //protected - é acessivel somente poir heranca 
    
    public $nome;
    public $idade;

    public function apresentar(){
        echo "Olá,meu nome é $this->nome";
        echo "<hr>";
        echo "tenho $this->idade anos";
        echo "<hr>";
    }
  }

  $aluno1 = new Pessoa();
  $aluno1->nome = 'Vick';
  $aluno1->idade = '17';
  $aluno1->apresentar();

  $aluno2 = new Pessoa();
  $aluno2->nome = 'João';
  $aluno2->idade = '18';
  $aluno2->apresentar();


?>
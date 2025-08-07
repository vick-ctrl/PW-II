<?php
  //classe pai 
  class Pessoa {
   public $nome;
    public $tipo;

    public function mostrarTipo(){
        echo "A pessoa $this->nome é do tipo $this->tipo <hr>";
    }
  }

  class PessoaComum extends Pessoa {
     public $CPF;
  }

  class Empresa extends Pessoa {
    public $CNPJ;
  }

  $pessoa = new PessoaComum();
  $pessoa->nome = 'vick';
  $pessoa->tipo = 'fisica';



  $empresa = new PessoaComum();
  $empresa->nome = 'Vick´s Books Ltda';
  $empresa->tipo = 'Juridica';
 


  $pessoa->mostrarTipo();
  $empresa->mostrarTipo();

?>
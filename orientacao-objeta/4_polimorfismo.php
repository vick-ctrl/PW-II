<?php
 class Forma {
    public function desenahr(){
        echo "desenhando algo";
    }
 }

 class Circulo extends Forma{
    public function desenhar (){
        echo "desenhando um circulo";
    }
 }

 $figura = new Circulo();
 $figura->desenhar();
 
?>
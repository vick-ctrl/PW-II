<?php
$pessoa1 = [];


$pessoa1 ['nome'] = 'vick';
$pessoa1 ['sobrenome']= 'oliveira';
$pessoa1 ['idade']= 16;

$pessoa2 = [];
$pessoa2 ['nome'] = 'vicktoria';
$pessoa2 ['sobrenome']= 'oliveira';
$pessoa2 ['idade']= 17;

$lista_pessoas = [
    $pessoa1,
    $pessoa2
];
  echo "<h1> o nome é : " . $lista_pessoas [0] ['nome'] . "</h1>";




?>
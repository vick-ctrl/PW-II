<?php
    //vetor  = array com uma dimenção
    $lista_frutas = [];

    //array sequencial utiliza numeros 
    $lista_frutas[0] = 'banana';
    $lista_frutas[1] = 'maça';
    $lista_frutas[2] = 'morango';
    $lista_frutas[3] = 'uva';

    echo '<pre>';
    echo var_dump ($lista_frutas);

    //array  associativo utiliza texto em vez de num
    $lista_objetos =[];
    $lista_objetos['objeto1'] = 'bola';
    $lista_objetos['objeto2'] = 'boneca';

    echo '<pre>';
    echo var_dump ($lista_objetos);

?>
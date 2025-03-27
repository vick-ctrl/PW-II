<?php
$alunos = [
    [
        'nome' => 'vick',
        'nota' => 5
    ],
    [
        'nome' => 'joão',
        'nota' => 10
    ]
    ];

    foreach ($alunos as $key => $estudantes){
        if ($estudantes ['nota'] < 7)
           echo 'aluno ' .  $estudantes ['nome'] . ' está reprovado';
        else
           echo 'aluno '.  $estudantes ['nome'] . ' está aprovado'  ;
           
           echo '<br>';
    }


?>
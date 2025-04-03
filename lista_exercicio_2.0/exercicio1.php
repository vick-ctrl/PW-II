<?php
  $alunos = [
    'aluno1' => [
        'nome' => 'João',
        'rm' => '20062410',
        'foto' => 'https://i.pinimg.com/736x/a9/f3/ae/a9f3aef023f9b36d681a0d67c1869e88.jpg',
        'telefone' => '1520072008',
    ],
    'aluno2' => [
        'nome' => 'Victoria',
        'rm' => '24102006',
        'foto' => 'https://i.pinimg.com/736x/ad/1e/4c/ad1e4c6eca59096f5530197a7edfb284.jpg ',
        'telefone' => '15 996830434',
    ],
    'aluno3' => [
        'nome' => 'Geovanna',
        'rm' => '28052008',
        'foto' => 'https://i.pinimg.com/736x/cc/5a/76/cc5a76aeb8cda20fdc78ec3527b11294.jpg',
        'telefone' => '15 98340769'
    ],
    'aluno4' => [
        'nome' => 'Ketylin',
        'rm' => '67098543',
        'foto' => 'https://i.pinimg.com/736x/17/d0/2b/17d02b40a6ff23a05eacbd7e4550cf8e.jpg',
        'telefone' => '15 78886541',
    ]

];
foreach ($alunos as $key => $aluno) {
    echo 'Nome do Aluno ' . $aluno['nome'] . '<br>';
    echo 'RM ' . $aluno['rm'] . '<br>';
    echo 'telefone '. $aluno['telefone'];
    echo "<br><img src='" . $aluno["foto"]."' style='width: 300px;'>";
    echo '<hr>';
}

?>
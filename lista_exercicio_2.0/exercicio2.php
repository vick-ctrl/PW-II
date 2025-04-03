<?php
$zoologico = [
    'animal1' => [
        'nome' => 'François',
        'raça' => 'vira-lata',
        'especie' => 'cachorro',
        'cor' => 'preto e branco',
        'peso' => '11kg',
        'idade' => '14 anos',
        'foto' => '',
    ],
    'animal2' => [
        'nome' => 'Baby',
        'raça' => 'vira-lata',
        'especie' => 'cachorro',
        'cor' => 'preto',
        'peso' => '5kg',
        'idade' => '12 anos',
        'foto' => '',
    ],
    'animal3' => [
        'nome' => 'mimosa',
        'raça' => 'Highland',
        'especie' => 'gado',
        'cor' => 'branca',
        'peso' => '20kg',
        'idade' => '6 anos',
        'foto' => 'https://i.pinimg.com/736x/ff/c2/a5/ffc2a5f2daf9d83c3ba41baa9152271e.jpg',
    ],
    'animal4' => [
        'nome' => 'pituxa',
        'raça' => 'pigmeu',
        'especie' => 'cabritinho',
        'cor' => 'branca',
        'peso' => '5kg',
        'idade' => '1 ano',
        'foto' => 'https://i.pinimg.com/736x/2e/b9/06/2eb9062a61bb14e52a9194bf508ce341.jpg',
    ],

];
foreach ($zoologico as $key => $animal) {
    echo 'Nome do Animal  :' . $animal['nome'] . '<br>';
    echo 'Raça : ' . $animal['raça'] . '<br>';
    echo 'especie : '. $animal['especie'] .'<br>';
    echo 'cor : '. $animal['cor']. '<br>';
    echo 'peso : '. $animal['peso']. '<br>';
    echo 'idade : '. $animal['idade']. '<br>';
    echo "<br><img src='" . $animal["foto"]."' style='width: 300px;'>";
    echo '<hr>';
}

?>
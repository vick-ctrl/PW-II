<?php
$zoologico = [
    'animal1' => [
        'nome' => 'François',
        'raça' => 'vira-lata',
        'especie' => 'cachorro',
        'cor' => 'preto e branco',
        'peso' => '11kg',
        'idade' => '14 anos',
        'foto' => 'https://mail.google.com/mail/u/0?ui=2&ik=1eaecc4278&attid=0.1&permmsgid=msg-a:r-1561014170361556689&th=19612de447e68e4c&view=fimg&fur=ip&permmsgid=msg-a:r-1561014170361556689&sz=s0-l75-ft&attbid=ANGjdJ8_AXYuVoFgIpcC1va-VzJPlJochszJxhJPJGOEDMViCETpqFftm3AH5p7WYkbztwPYQlUdQKf8vswkhaL-_ZZemCy0lvMI835ld7qmg83mx_VOFmwHUKC1V8U&disp=emb&realattid=0B7D7E7E-A921-47A4-961E-151A2A22EF8B&zw',
    ],
    'animal2' => [
        'nome' => 'Baby',
        'raça' => 'vira-lata',
        'especie' => 'cachorro',
        'cor' => 'preto',
        'peso' => '5kg',
        'idade' => '12 anos',
        'foto' => 'https://mail.google.com/mail/u/0?ui=2&ik=1eaecc4278&attid=0.1&permmsgid=msg-a:r3913967665449439200&th=19612de0ca87270d&view=fimg&fur=ip&permmsgid=msg-a:r3913967665449439200&sz=s0-l75-ft&attbid=ANGjdJ_VkX0oV18g79orP0tSzBU-nb-R8yOhdYpCqkH51LpDXR9ewqNCkTuAgezjOwXhAUHDmtYrjIvjDTNAmGrYQd3uhtCcExyCV9jNZ1rgck49K6VzE2lpKvJ6-5Q&disp=emb&realattid=49B95F3D-1629-4AB2-B97A-072574F63CE1&zw',
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

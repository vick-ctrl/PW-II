<?php

$estacionamento = [
    'fusca',
    'uno',
    'ferrari',
];

foreach ($estacionamento as $key => $value) {
    echo "<hr>";
    echo " <b> veiculo"  . $key .  " <b>: " . $value;
}

$patio = [
   [
    'nome' => 'fusca',
    'placa' => 'jvm-1024',
    'foto' => 'https://img.estadao.com.br/wp/jornal-do-carro/files/2011/08/FUSCA-1.jpg'
   ],
   
   [
    'nome' => 'fiorino',
    'placa' => 'jvm-1024',
    'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR8kO_P3TGemz2GHHSnZagCEJ3JIdxmfXUm_LCtxaGhl_pXDz4Pp7VzCzYVIILrEzr8KU&usqp=CAU'
   
   ],
  
   [
    'nome' => 'ferrari',
    'placa' => 'jvm-1024',
    'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDmJ-Lix2c2KqHeRR-J5fVunuPDz1bxASbJQ&s'
   ]
];


foreach ($patio as $key => $value) {
    echo "<br>veiculo : " . $value ["nome"];
    echo "<br>placa : " . $value ["placa"];
    echo "<br><img src='" . $value["foto"]."' style='width: 300px;'>";

}
?>
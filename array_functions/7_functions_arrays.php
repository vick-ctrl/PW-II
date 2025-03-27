<?php
$pessoas = [
    [
      'nome' => 'vick',
     'idade'=> 14
    ],
     
    
    [
'     nome' =>'vicktoria',
     'idade'=> 17
    ],


    [
    'nome' =>'joão',
    'idade'=> 18
    ],
    
];
verificarVotacao($pessoas);



function verificarVotacao($pessoas){
foreach ($pessoas as $key => $pessoa){
    
    if ($pessoa ['idade'] < 16 ) 
        echo "não pode votar ";
    
    else if ($pessoa['idade'] >= 16 && $pessoa ['idade'] < 18 ) 
        echo " o voto é opcional ";
    
    else if ($pessoa ['idade'] >= 18 && $pessoa ['idade'] < 70  )
        echo " o voto é obrigatório " ;

    else 
    echo "o voto é opicional ";
    
    
    echo "<br>";
    echo "<br>";
   }
    }
    
    
    



?>
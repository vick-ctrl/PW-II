<?php
    $idade = 97;

    if ($idade >= 0 && $idade <12) {
        echo 'Criança';
    }elseif ($idade >= 12 && $idade <= 18 ) {
        echo 'Adolescente';
    }elseif ($idade < 60) {
        echo 'Adulto';
    }else{
        echo 'Idoso';
    }
?>
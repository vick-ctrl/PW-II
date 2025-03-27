<?php
  $alunos = [
    'vick',
    'joão',
    'geh',

  ];
  dizerOla($alunos);

  function dizerOla($estudantes){
    foreach ($estudantes as $index => $estudantes) {
        echo "<h1> $estudantes </h1>";
    }
  }
?>
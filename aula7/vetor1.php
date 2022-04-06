<?php
    $alunos = array('Jose','Joao','Pedro','Maria','Alan');
    // sort efetua a ordenação dos elementos
    sort($alunos);
    // count retorna o número  de elementos do vetor
    for($x = 0; $x < count($alunos); $x++){
        echo 'Aluno: ' .$x . ' Nome: ' . $alunos[$x] . '<br>';
    }

    $indice = array_search('Alan', $alunos);
    if($indice === false)
      echo 'Aluno não encontrado';
    else
        echo 'Aluno encontrado na posição '.$indice;
?>
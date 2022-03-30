<?php
    $data = date("m-d-Y");
    echo $data . "<br>";
    $dia = substr($data,3,2);
    $mes = substr($data,0,2);
    $ano = substr($data,6,4);
    $novadata = $dia . "/" . $mes . "/" . $ano;
    echo $novadata;
?>
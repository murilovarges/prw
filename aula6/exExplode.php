<?php
    $data = date("m-d-Y");
    echo $data;
    $partes = explode("-", $data);
    $parte1 = $partes[0];
    $parte2 = $partes[1];
    $parte3 = $partes[2];
    $novadata = $parte2 . "/" . $parte1 . "/" . $parte3;
    echo $novadata;
?>
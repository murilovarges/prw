<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuarios = array('murilo' => '123',
                      'cassio' => 'abc');

    if(array_key_exists($login,$usuarios)){
        if($usuarios[$login] == $senha){
            echo 'Acesso permitido \o/';
        }else{
            echo 'Senha inválida!';
        }
    }else{
        echo 'Usuario não encontrado!';
    }
?>
<?php
    $login = $_GET['login'];
    $senha = $_GET['senha'];
    
    $usuario["Renan"]["678"]="1" ;
    $usuario["Pedro"]["lop"]="2" ;
    $usuario["Ana"]["xz9"]="3" ;
    
    if(array_key_exists($login, $usuario))
    {
        if($usuario[$login][$senha]==false)
        {
            echo "senha incorreta";
        }
        else
        {
            echo "Usuário da posição:".$usuario[$login][$senha]."<br>";
        }
    }
    else
    {
        echo "Usuário não encontrado";
    }
?>
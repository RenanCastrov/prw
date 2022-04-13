<?php
    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];

    $escolha = $_GET["operacao"];
    if($escolha == "somar")
    {
        echo $num1 + $num2;
    }
    else
    {
        if($escolha == "subtrair")
        {
            echo $num1 - $num2;
        }
        else
        {
            if($escolha == "dividir")
            {
                echo $num1 / $num2;
            }
            else
            {
                if($escolha == "multiplicar")
                {
                    echo $num1 * $num2;
                }
            }
        }
    }
?>
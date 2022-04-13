<?php
/*
    Abaixo de 17 Muito abaixo do peso
    Entre 17 e 18,49 Abaixo do peso
    Entre 18,5 e 24,99 Peso normal
    Entre 25 e 29,99 Acima do peso
    Entre 30 e 34,99 Obesidade I
    Entre 35 e 39,99 Obesidade II (severa)
    Acima de 40 Obesidade III (mórbida)
*/
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = $peso / ($altura * $altura);

    if($imc < 17)
    {
        echo "Índice de massa corpórea: ".$imc."<br>";
        echo "Situação: Muito abaixo do peso";
    }
    else
    {
        if($imc >= 17 and $imc <= 18.49)
        {
            echo "Índice de massa corpórea: ".$imc."<br>";
            echo "Situação: Abaixo do peso";
        }
        else
        {
            if($imc >= 18.5 and $imc <= 24.99)
            {
                echo "Índice de massa corpórea: ".$imc."<br>";
                echo "Situação: Peso normal";
            }
            else
            {
                if($imc >= 25 and $imc <= 29.99)
                {
                    echo "Índice de massa corpórea: ".$imc."<br>";
                    echo "Situação: Acima do peso";
                }
                else
                {
                    if($imc >= 30 and $imc <= 34.99)
                    {
                        echo "Índice de massa corpórea: ".$imc."<br>";
                        echo "Situação: Obesidade I";
                    }
                    else
                    {
                        if($imc >= 35 and $imc <= 39.99)
                        {
                            echo "Índice de massa corpórea: ".$imc."<br>";
                            echo "Situação: Obesidade II (severa)";
                        }
                        else
                        {
                            if($imc >= 40)
                            {
                                echo "Índice de massa corpórea: ".$imc."<br>";
                                echo "Situação: Obesidade III (mórbida)";
                            }
                        }
                    }
                }
            }
        }
    }
?>
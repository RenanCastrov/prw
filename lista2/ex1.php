<?php
    /*
    Faça um script PHP para somar os números pares < 100
    */
    $i = 0;
    $soma = 0;

    while($i < 100)
    {
        if($i % 2 == 0)
        {
            $soma += $i;
        }
    }
    echo "A soma de todos os números pares menores que 100 é igual a: ".$soma;
?>
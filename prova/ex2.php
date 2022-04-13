<?php
    /*
        * Efetue um script PHP que a partir de dois valores quaisquer e efetue
        sua multiplicação e apresente o resultado utilizando para isso apenas o operador “+”, visto que:
        • (3 * 5) = 5 + 5 + 5
        • (4 * 12) = 12 + 12 + 12 + 12
    */
    $num1 = 4;
    $num2 = 4;
    
    $cont = 1;
    $multiplicacao = 0;
    while($cont <= $num1)
    {
        $multiplicacao+=$num2;
        $cont++;
    }
    echo $num1."x".$num2." = ".$multiplicacao;
?>
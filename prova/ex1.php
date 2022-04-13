<?php
    /*
    Efetue um script PHP que calcule e imprima o salário reajustado de um
    funcionário de acordo com a seguinte regra:
    • Salários até 300, reajuste de 50%
    • Salários maiores que 300, reajuste de 30%
    */
    $salario = 2000;
    $reajuste = 0;
    if($salario <= 300)
    {
        $reajuste = (($salario / 100) * 50) + $salario;
        echo "Salário do funcionário: R$".$salario."<br>";
        echo "Salário do funcionário com reajuste: R$".$reajuste;
    }
    else
    {
        $reajuste = (($salario / 100) * 30) + $salario;
        echo "Salário do funcionário: R$".$salario."<br>";
        echo "Salário do funcionário com reajuste: R$".$reajuste;
    }
?>
<?php
    /*
    Um número é, por definição, primo se ele não tem divisores,
    exceto 1 e ele próprio. Preparar um script PHP para verificar
    números entre 0 e 200 e determinar se cada um dele é primo ou
    não.
    */
    $num = 0;
    $divisores = 0;
    while($num < 200)
    {
        for($count = 1; $count < $num; $count++)
        {
            if($num % $count == 0)
            {
                $divisores++;
            }
        }
        if($divisores == 2)
        {
            echo $num."<br>";
        }
    }
?>
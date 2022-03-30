<?php
    /*
        Faça um script PHP que leia um número que represente um
        determinado mês do ano. Após a leitura escreva por extenso qual
        o mês lido. Caso o número digitado não esteja na faixa de 1 .. 12
        escreva uma mensagem informando o usuário do erro da
        digitação.
    */
    $num = 2;
    switch($num)
    {
        case 1:
            echo "Esse é o mês de Janeiro";
            break;
        case 2:
            echo "Esse é o mês de Fevereiro";
            break;
        case 3:
            echo "Esse é o mês de Março";
            break;
        case 4:
            echo "Esse é o mês de Abril";
            break;
        case 5:
            echo "Esse é o mês de Maio";
            break;
        case 6:
            echo "Esse é o mês de Junho";
            break;
        case 7:
            echo "Esse é o mês de Julho";
            break;
        case 8:
            echo "Esse é o mês de Agosto";
            break;
        case 9:
            echo "Esse é o mês de Setembro";
            break;
        case 10:
            echo "Esse é o mês de Outubro";
            break;
        case 11:
            echo "Esse é o mês de Novembro";
            break;
        case 12:
            echo "Esse é o mês de Dezembro";
            break;
        default:
            echo "Erro de digitação...Esse número não corresponde a um mês";
            break;
    }
?>
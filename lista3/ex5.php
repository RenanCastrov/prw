<?php
    /*
        Crie um script em PHP que a partir de uma data exiba o dia
        da semana (segunda, terça, ...).
    */
    $data = date("m-D-Y");
    $dia = substr($data,3,2);
    
    switch($dia)
    {
        case "Su":
            echo "Domingo";
            break;
        case "Mo":
            echo "Segunda";
            break;
        case "Tue":
            echo "Terça";
            break;
        case "Wed":
            echo "Quarta";
            break;
        case "Thu":
            echo "Quinta";
            break;
        case "Fri":
            echo "Sexta";
            break;
        case "Sat":
            echo "Sábado";
            break;
    }
?>
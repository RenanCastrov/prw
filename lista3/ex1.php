<?php
    /*
        Crie um script em PHP que exiba quantos caracteres possui
        uma palavra ou frase que foi atribuída a uma vaiável.
    */
    $palavra = "paralelepipedo";
    $palavra = trim($palavra);
    echo "Essa palavra/frase possui ".strlen($palavra)." caracteres!";
?>
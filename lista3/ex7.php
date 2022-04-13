<?php
    /*
    Crie um script em PHP que transforme o seguinte link
    (rb.ude.psfi.www) que está invertido de maneira inversa,
    transformando em um link funcional.
    */
    $inverso = "rb.ude.psfi.www";

    $funcional = strrev($inverso);

    echo "Link invertido: ".$inverso."<br>";
    echo "Link funcional: ".$funcional;
?>
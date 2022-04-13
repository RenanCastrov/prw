<?php
    $cont = 1;

    echo "Tabuada do ".$_GET['tabuada']."<br>"."<br>";
    while($cont <= 10)
    {
        echo $_GET['tabuada']."x".$cont." = ".($cont * $_GET['tabuada'])."<br>";
        $cont++;
    }
?>
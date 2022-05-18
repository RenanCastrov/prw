<?php
    $hostname = "localhost";
    $database = "lista6";
    $username = "root";
    $password = "";
    $port = 3307;
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
<<<<<<< HEAD
    //printf("Banco de dados conectado com sucesso \o/");
=======
    printf("Banco de dados conectado com sucesso \o/");
>>>>>>> 0886217a7cae6020e55ca98586a9582645e861db
?>
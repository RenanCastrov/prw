<?php
    $hostname = "localhost";
    $database = "prova2";
    $username = "root";
    $password = "";
    $port = 3307;
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    //printf("Banco de dados conectado com sucesso \o/");
?>
<?php
    $nome = $_GET['nome'];
    $estado = $_GET['estados'];
    $cpf = $_GET['cpf'];
    $rg = $_GET['rg'];
    $sexo = $_GET['sexo'];
    $saldo = $_GET['saldo'];
    $total = $_GET['total'];

    echo "Nome: ".$nome."<br>"."Estado: ".$estado."<br>"."CPF: ".$cpf."<br>".
    "RG: ".$rg."<br>"."Sexo: ".$sexo."<br>"."Saldo do Cartão de Crédito: ".$saldo."<br>".
    "Total da compra: ".$total."<br>";

    if(empty($nome) || empty($cpf) || empty($rg))
    {
        echo "CAMPOS OBRIGATÓRIOS NÃO PREENCHIDOS"."<br>";
    }
    else
    {
        if($saldo < $total)
        {
            echo "SALDO INSUFICIENTE PARA CONCLUIR A COMPRA!";
        }
        else
        {
            echo "Novo saldo: R$".($saldo - $total);
        }
    }
?>
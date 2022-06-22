<?php

    include('conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    $id = $_POST['id'];

    $sql = "UPDATE fluxo_caixa SET
    data= '".$data."',
    tipo= '".$tipo."',
    valor= '".$valor."',
    historico= '".$historico."',
    cheque= '".$cheque."' 
    WHERE id= '".$id."' ";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados inseridos com sucesso";
    }
    else
    {
        echo "Erro ao inserir no banco de dados meu caro: ".mysqli_error($con);
    }
?>
<a href='index.php'> Voltar</a>
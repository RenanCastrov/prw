<?php
    include('conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
            VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."');";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Dados inseridos com sucesso";
    }
    else
    {
        echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
    }
?>
<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO agenda (nome, apelido, email, telefone, celular, estado, cidade, bairro, endereco)
            VALUES ('".$nome."', '".$apelido."', '".$email."', '".$telefone."', '".$celular."', '".$estado."', '".$cidade."', 
            '".$bairro."', '".$endereco."');";

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
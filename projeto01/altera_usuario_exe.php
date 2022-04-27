<?php

    include('conexao.php');

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    echo "<p>Nome do Usuário: ".$nome_usuario."<br></p>";

    $sql = "UPDATE usuario SET
            nome_usuario= '".$nome_usuario."',
            nome_usuario= '".$email_usuario."',
            nome_usuario= '".$fone_usuario."'
            WHERE id_usuario= '".$id_usuario."' ";
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
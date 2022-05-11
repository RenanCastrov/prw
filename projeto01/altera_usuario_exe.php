<?php

    include('conexao.php');

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];
    $id_usuario = $_POST['id_usuario'];

    echo "<p>Nome do Usuário: ".$nome_usuario."<br></p>";

    $sql = "UPDATE usuario SET
            nome_usuario= '".$nome_usuario."',
            email_usuario= '".$email_usuario."',
            fone_usuario= '".$fone_usuario."'
            WHERE id_usuario= '".$id_usuario."' ";
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
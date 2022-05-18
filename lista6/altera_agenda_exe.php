<?php

    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $apelido = $_POST['apelido'];
    $id_agenda = $_POST['id_agenda'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];

    echo "<p>Nome: ".$nome."<br></p>";

    $sql = "UPDATE agenda SET
            nome= '".$nome."',
            email= '".$email."',
            apelido= '".$apelido."', 
            telefone= '".$telefone."', 
            celular= '".$celular."', 
            estado= '".$estado."', 
            cidade= '".$cidade."', 
            bairro= '".$bairro."', 
            endereco= '".$endereco."' 
            WHERE id_agenda= '".$id_agenda."' ";
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
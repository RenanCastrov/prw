<?php

    include('conexao.php');

    //Upload da foto do usuário
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    //Tipo de imagem
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //Validação de extensões de imagem
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    //Checa as extensões
    if(in_array($imageFileType, $extensions_arr))
    {
        //Upload do arquivo
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome))
        {
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

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
    if(isset($fotoNome))
    {
        $sql = "UPDATE agenda SET
            nome= '".$nome."',
            email= '".$email."',
            apelido= '".$apelido."', 
            telefone= '".$telefone."', 
            celular= '".$celular."', 
            estado= '".$estado."', 
            cidade= '".$cidade."', 
            bairro= '".$bairro."', 
            endereco= '".$endereco."',
            foto_blob= '".$fotoBlob."',
            foto_nome= '".$fotoNome."'  
            WHERE id_agenda= '".$id_agenda."' ";
    }
    else
    {
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
    }
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
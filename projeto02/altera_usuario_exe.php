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

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];
    $id_usuario = $_POST['id_usuario'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: ".$nome_usuario."<p>";
    if(isset($fotoNome))
    {
        $sql = "UPDATE usuario SET
            nome_usuario= '".$nome_usuario."',
            email_usuario= '".$email_usuario."',
            fone_usuario= '".$fone_usuario."',
            foto_blob= '".$fotoBlob."',
            foto_nome= '".$fotoNome."' 
            WHERE id_usuario= '".$id_usuario."' ";
    }
    else
    {
        $sql = "UPDATE usuario SET
            nome_usuario= '".$nome_usuario."',
            email_usuario= '".$email_usuario."',
            fone_usuario= '".$fone_usuario."'
            WHERE id_usuario= ".$id_usuario;
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
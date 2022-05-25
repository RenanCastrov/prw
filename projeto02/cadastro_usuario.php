<?php

    include('conexao.php');
    //Upload da foto do usuário
    $fotoNome = $_FILES["foto"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES["foto"]["name"]);
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

    echo "<p>Nome do Usuário: ".$nome_usuario."<br>";
    echo "Email: ".$email_usuario."<br>";
    echo "Telefone: ".$fone_usuario."</p>";

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, foto_blob, foto_nome)
            VALUES ('".$nome_usuario."', '".$email_usuario."', '".$fone_usuario."', '".$fotoBlob."', '".$fotoNome."');";
    
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
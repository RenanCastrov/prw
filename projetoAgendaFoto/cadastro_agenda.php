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

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $data = date('Y/m/d');

    $sql = "INSERT INTO agenda (nome, apelido, email, telefone, celular, estado, cidade, bairro, endereco, dt_cadastro, foto_blob, foto_nome)
            VALUES ('".$nome."', '".$apelido."', '".$email."', '".$telefone."', '".$celular."', '".$estado."', '".$cidade."', 
            '".$bairro."', '".$endereco."', '".$data."', '".$fotoBlob."', '".$fotoNome."');";

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
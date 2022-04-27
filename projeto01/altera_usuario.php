<?php
    include("conexao.php");
    $id_usuario = $_GET["id_usuario"];
    $sql = 'SELECT * FROM usuario where id_usuario = '.$id_usuario;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alteração de Usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cadastro.css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="cadastro_usuario.php" id="formulario">
            <h2 class="titulos" id="tituloP">Alteração de Usuário - IFSP</h2>
            <br>
            <label for="nome" class="titulos">Nome: </label>
            <input type="text" name="nome_usuario" class="inputs" size="50" value="<?php echo $row['nome_usuario'] ?>"><br>
            <label for="email" class="titulos">Email: </label>
            <input type="text" name="email_usuario" class="inputs" size="50" value="<?php echo $row['email_usuario'] ?>"><br>
            <label for="fone" class="titulos">Telefone: </label>
            <input type="text" name="fone_usuario" class="inputs" size="30" value="<?php echo $row['fone_usuario'] ?>"><br>
            <input type="submit" name="Enviar" id="button">
        </form>
    </body>
</html>
<?php
    include("conexao.php");
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda where id_agenda =".$id_agenda;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Alteração de Agenda</title>
            <link rel="stylesheet" href="cadastroag.css">
            <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        </head>
        <body>
            <form method="post" action="altera_agenda_exe.php" id="formulario" enctype='multipart/form-data'>
                <h2 class="titulos">Alteração de Agenda</h2><br>
                <label for="nome" class="titulos">Nome:</label>
                <input type="text" name="nome" size="50" value="<?php echo $row['nome'] ?>"><br><br>
                <label for="apelido" class="titulos">Apelido:</label>
                <input type="text" name="apelido" size="40" value="<?php echo $row['apelido'] ?>"><br><br>
                <label for="email" class="titulos">Email:</label>
                <input type="text" name="email" size="70" value="<?php echo $row['email'] ?>"><br><br>
                <label for="telefone" class="titulos">Telefone:</label>
                <input type="text" name="telefone" size="15" value="<?php echo $row['telefone'] ?>"><br><br>
                <label for="celular" class="titulos">Celular:</label>
                <input type="text" name="celular" size="15" value="<?php echo $row['celular'] ?>"><br><br>
                <label for="estado" class="titulos">Estado:</label>
                <input type="text" name="estado" size="2" value="<?php echo $row['estado'] ?>"><br><br>
                <label for="cidade" class="titulos">Cidade:</label>
                <input type="text" name="cidade" size="50" value="<?php echo $row['cidade'] ?>"><br><br>
                <label for="bairro" class="titulos">Bairro:</label>
                <input type="text" name="bairro" size="50" value="<?php echo $row['bairro'] ?>"><br><br>
                <label for="endereco" class="titulos">Endereço:</label>
                <input type="text" name="endereco" size="70" value="<?php echo $row['endereco'] ?>"><br><br>
                <label for="foto" class="titulos">Seleção de foto: </label>
                <input type="file" id="foto" name="foto" accept="image/*">
                <input type="hidden" name="id_agenda" size="30" value="<?php echo $row['id_agenda'] ?>"><br>
                <input type="submit" name="Enviar" id="button">
            </form>
        </body>
    </html>
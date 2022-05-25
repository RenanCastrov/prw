<?php
    
    include("conexao.php");
    $sql = 'SELECT * FROM usuario';
    $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de usuários</title>
</head>
<body>
    <h2>Listagem de usuários</h2><br>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Excluir</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_usuario']."</td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
            echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>".$row['nome_usuario']."</a></td>";
            echo "<td>".$row['email_usuario']."</td>";
            echo "<td>".$row['fone_usuario']."</td>";
            echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>
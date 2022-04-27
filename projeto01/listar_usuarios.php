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
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_usuario']."</td>";
            echo "<td>".$row['nome_usuario']."</td>";
            echo "<td>".$row['email_usuario']."</td>";
            echo "<td>".$row['fone_usuario']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>
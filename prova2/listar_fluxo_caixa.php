<?php
    
    include("conexao.php");
    $sql = 'SELECT * FROM fluxo_caixa';
    $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Fluxo de Caixa</title>
</head>
<body>
    <h2 align="center" >Listagem de Fluxo de Caixa</h2><br>
    <table align="center" border="1" width="800">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['data']."</td>";
            echo "<td>".$row['tipo']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>".$row['historico']."</a></td>";
            echo "<td>".$row['cheque']."</td>";
            echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php">voltar</a>
</body>
</html>
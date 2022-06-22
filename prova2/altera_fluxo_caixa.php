<?php
    include("conexao.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id =".$id;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Alteração de Fluxo de Caixa</title>
            <link rel="stylesheet" href="cadastroag.css">
            <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        </head>
        <body>
            <form method="post" action="altera_fluxo_caixa_exe.php" id="formulario">
                <h2 class="titulos">Alteração de Fluxo de Caixa</h2><br>
                <label for="data" class="titulos">Data:</label>
                <input type="date" name="data" value="<?php echo $row['data'] ?>"><br><br>
                <label for="tipo" class="titulos">Tipo:</label>
                <input type="radio" name="tipo" value="entrada"> Entrada
                <input type="radio" name="tipo" value="saida"> Saída <br><br>
                <label for="valor" class="titulos">Valor:</label>
                <input type="text" name="valor" value="<?php echo $row['valor'] ?>"><br><br>
                <label for="historico" class="titulos">Histórico:</label>
                <input type="text" name="historico" size="50" value="<?php echo $row['historico'] ?>"><br><br>
                <label for="cheque" class="titulos">Cheque:</label>
                <select name="cheque" value="<?php echo $row['cheque'] ?>">
                    <option>Sim</option>
                    <option>Não</option>
                </select><br><br>
                <input type="hidden" name="id" size="30" value="<?php echo $row['id'] ?>"><br>
                <input type="submit" name="Enviar" id="button">
            </form>
        </body>
    </html>
<?php
    require_once '../Procedimento.php';
    $p = new Procedimento();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Procedimento</title>
    <link rel="stylesheet" href="TabelaProcedimento.css">
</head>
<body>
    
        <center>

    <h2>Tabela Procedimento</h2>
    <table width="467" border="1px">
        <tr>
            <td>ID Procedimento</td>
            <td>Codigo</td>
            <td>Nome Procedimento</td>
            <td>Valor</td>
            <td>Gênero</td>
            <td>Adicionar Exceção</td>
        </tr>

        <?php

            $p->conexao("localhost","banco_Sa_03","root","");

            $p->TabelaProcedimento();
            
        ?>
        
        
    </table>
    <br><br>
    <button><a href="../CadastroProcedimento/CadastroProcedimento.php">Cadastrar Procedimento</a></button>
    <br>
    <br>
    <button><a href="../DeletarProcedimento/DeletarProcedimento.php">Apagar Procedimento</a></button>
    <br>
    <br>
    <button><a href="../AtualizarProcedimento/AtualizarProcedimento.php">Atualizar Procedimento</a></button>

    </center>

</body>
</html>
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
    

    <h2 id="titulo">Tabela Procedimento</h2>
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

            $p->conexao();

            $p->TabelaProcedimento();
            
        ?>
        
        
    </table>
    
    <div id="centralizarbotoes">
    <button id="botcad"><a href="../CadastroProcedimento/CadastroProcedimento.php">Cadastrar Procedimento</a></button>
    
    <button id="botdel"><a href="../DeletarProcedimento/DeletarProcedimento.php">Apagar Procedimento</a></button>
    
    <button id="botatu"><a href="../AtualizarProcedimento/AtualizarProcedimento.php">Atualizar Procedimento</a></button>

    <button id="botaovoltar"><a href="../../index.php">Voltar Início</a></button>
    </div>

</body>
</html>
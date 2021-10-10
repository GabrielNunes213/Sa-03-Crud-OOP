<?php
    require_once '../Especialidade.php';
    $e = new Especialidade();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Especialidade</title>
    <link  rel="stylesheet" href="TabelaEspecialidade.css">
</head>
<body>
    
   
    <h2 id="titulo">Tabela Especialidade</h2>
    <table width="467" border="1px">
        <tr>
            <td>ID Especialidade</td>
            <td>Nome Especialidade</td>
        </tr>

        <?php

            $e->conexao();
           
            $e->TabelaEsp();
            
        ?>
        
        
    </table>
    
    <div id="centralizarbotoes">
    <button id="botcad"><a href="../CadastroEspecialidade/CadastroEspecialidade.php">Cadastrar Especialidade</a></button>
    
    <button id="botdel"><a href="../DeletarEspecialidade/DeletarEspecialidade.php">Apagar Especialidade</a></button>
    
    <button id="botatu"><a href="../AtualizarEspecialidade/AtualizarEspecialidade.php">Atualizar Especialidade</a></button>
    
    <button id="botvoltar"><a href="../../index.php">Voltar Início</a></button>
    </div>
        

</body>
</html>
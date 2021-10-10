<?php
    require_once '../Medico.php';
    $m = new Medico();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Medicos</title>
    <link rel="stylesheet" href="TabelaMedico.css">
</head>
<body>
    
    <h2 id="titulo">Tabela Medicos</h2>
    
    <table width="467" border="1px">
        <tr>
            <td>ID Medico</td>
            <td>Nome medico</td>
            <td>Rua</td>
            <td>Numero Casa</td>
            <td>Bairro</td>
            <td>Cep</td>
            <td>Complemento</td>
            <td>Email</td>
            <td>Celular</td>
            <td>Telefone Fixo</td>
            <td>Telefone Secundario</td>
        </tr>

        <?php
            
            $m->conexaoM();

            $m->TabelaMedico();
            
        ?>
        
        
    </table>
    
    <div id="centralizarbotoes">
    <button id="botcad"><a href="../CadastroMedico/CadastroMedico.php">Cadastrar Medico</a></button>
    
    <button id="botdel"><a href="../DeletarMedico/DeletarMedico.php">Apagar Medico</a></button>
    
    <button id="botatu"><a href="../AtualizarMedico/AtualizarMedico.php">Atualizar Medico</a></button>

    <button id="botvoltar"><a href="../../index.php">Voltar Início</a></button>

    </div>

</body>
</html>
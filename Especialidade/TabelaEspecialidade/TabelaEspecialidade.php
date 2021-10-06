<?php
    require_once 'C:\xampp\htdocs\AtivsPHP\TII2002T-03\Gabriel\SA-03-CRUD-OOP\Especialidade\Especialidade.php';
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
    
    <center>
    <h2>Tabela Especialidade</h2>
    <table width="467" border="1px">
        <tr>
            <td>ID Especialidade</td>
            <td>Nome Especialidade</td>
        </tr>

        <?php

            $e->conexao("localhost","banco_Sa_03","root","");
           
            $e->TabelaEsp();
            
        ?>
        
        
    </table>
    <br><br>
    <button><a href="">Cadastrar Especialidade</a></button>
    <br>
    <br>
    <button><a href="DeletarEspecialidade/DeletarEspecialidade.php">Apagar Especialidade</a></button>
    <br>
    <br>
    <button><a href="AtualizarEspecialidade/AtualizarEspecialidade.php">Atualizar Especialidade</a></button>

    </center>

</body>
</html>
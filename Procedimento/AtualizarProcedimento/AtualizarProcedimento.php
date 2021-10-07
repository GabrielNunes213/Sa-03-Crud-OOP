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
    <title>Atualizar Procedimento</title>
    <link rel="stylesheet" href="AtualizarProcedimento.css">
</head>
<body>

    <center>
    
    <h2>Atualizar Procedimento</h2>
    <h3>Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3>Obrigatorio Colocar o ID para identificação</h3>

    <form method="post">

    <p>ID Procedimento</p> <input type="number" name="idproc" placeholder="Digite o ID" required><br>

    <p>Código</p> <input type="number" name="codigo" placeholder="Digite o Código"><br>

    <p>Nome</p><input type="text" name="nomeproc" placeholder="Nome Procedimento"><br>

    <p>Valor</p><input type="text" name="valor" placeholder="Digite o Valor"><br>

    <p>Gênero</p><input type="text" name="genero" placeholder="Digite o Gênero"><br>
   
    <p>Adicionar Exceção</p><input type="text" name="excecao" placeholder="Adicionar Exceção"><br>

    <br>
    <input id="botaoatualizarprocedimento" type="submit" value="Atualizar Procedimento">
    </form>

    </center>


    <?php
    
        if(isset($_POST['idproc'])){
            $idProc = $_POST['idproc'];
            $codigo = $_POST['codigo'];
            $nomeproc = $_POST['nomeproc'];
            $valor = $_POST['valor'];
            $genero = $_POST['genero'];
            $excecao = $_POST['excecao'];

            $p->conexao("localhost","banco_Sa_03","root","");

            $p->atualizarP($idProc,$codigo, $nomeproc, $valor, $genero, $excecao);
        }

    ?>

</body>
</html>
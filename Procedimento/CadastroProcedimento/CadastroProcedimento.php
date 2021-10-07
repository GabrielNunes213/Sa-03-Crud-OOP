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
    <title>Cadastro Procedimento</title>
    <link rel="stylesheet" href="CadastroProcedimento.css">
</head>
<body>

    <center>

    <h2>Cadastrar Procedimento</h2>
    
    <form method="post">
    <p>Código</p> <input type="number" name="codigo" placeholder="Digite o Codigo" required><br>

    <p>Nome</p><input type="text" name="nomeproc" placeholder="Digite o Nome" required><br>

    <p>Valor</p><input type="text" name="valor" placeholder="Digite o Valor" required><br>

    <p>Gênero</p><input type="text" name="genero" placeholder="Digite o Gênero" required><br>
   
    <p>Adicionar Exceção</p><input type="text" name="excecao" placeholder="Adicionar Exceção" required><br>

    <br>
    <input id="botaocadprocedimento" type="submit" value="Cadastrar Procedimento">
    </form>

    </center>

    <?php
    
    if(isset($_POST['codigo']) and isset($_POST['nomeproc']) and isset($_POST['valor']) and isset($_POST['genero']) and isset($_POST['excecao'])){
        $codigo = $_POST['codigo'];
        $nomeproc = $_POST['nomeproc'];
        $valor = $_POST['valor'];
        $genero = $_POST['genero'];
        $excecao = $_POST['excecao'];

        $p->conexao("localhost","banco_Sa_03","root","");

        $p->cadastrarP($codigo, $nomeproc, $valor, $genero, $excecao);

    }

    ?>

</body>
</html>
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
    <link href="../Navbar/font.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../Navbar/Materialize.css"/>
</head>
<body>

<nav>
     <div class="nav-wrapper">
         <a href="#" class="brand-logo">Stetic Center</a>
         <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
         </a>
         <ul class="right hide-on-med-and-down">
             <li><a href="../../index.php">Início</a></li>
             <li><a href="../TabelaProcedimento/TabelaProcedimento.php">Tabela Procedimento</a></li>
         </ul>
         <ul class="side-nav" id="menu-mobile">
             <li><a href="../../index.php">Início</a></li>
             <li><a href="../TabelaProcedimento/TabelaProcedimento.php">Tabela Procedimento</a></li>
         </ul>
     </div>
 </nav>

    <h2 id="titulo">Cadastrar Procedimento</h2>
    
    <form method="post">
    
    <div id="inputcodigo">
    <p id="codigo">Código</p> <input type="number" name="codigo" placeholder="Digite o Codigo" required><br>
    </div>

    <div id="inputnome">
    <p id="nome">Nome</p><input type="text" name="nomeproc" placeholder="Digite o Nome" required><br>
    </div>

    <div id="inputvalor">
    <p id="valor">Valor</p><input type="text" name="valor" placeholder="Digite o Valor" minlenght="0" maxlenght="15" onkeypress="$(this).mask('#.##0.00', {reverse: true});" required><br>
    </div>

    <div id="inputgenero">
    <p id="genero">Gênero</p><input type="text" name="genero" placeholder="Digite o Gênero" required><br>
    </div>

    <div id="inputexcecao">
    <p id="excecao">Adicionar Exceção</p><input type="text" name="excecao" placeholder="Adicionar Exceção" required><br>
    </div>

    <div id="botaocad">
    <input id="botaocadprocedimento" type="submit" value="Cadastrar Procedimento">
    </div>
    </form>

    <script src="../Script/Jquery.js"></script>
    <script src="../Script/JqueryMask.js"></script>
    <script src="../Script/Popper.js"></script>

    <?php
    
    if(isset($_POST['codigo']) and isset($_POST['nomeproc']) and isset($_POST['valor']) and isset($_POST['genero']) and isset($_POST['excecao'])){
        $codigo = addslashes($_POST['codigo']);
        $nomeproc = addslashes($_POST['nomeproc']);
        $valor = addslashes($_POST['valor']);
        $genero = addslashes($_POST['genero']);
        $excecao = addslashes($_POST['excecao']);

        $p->conexao();

        $p->cadastrarP($codigo, $nomeproc, $valor, $genero, $excecao);

    }

    ?>

</body>
</html>
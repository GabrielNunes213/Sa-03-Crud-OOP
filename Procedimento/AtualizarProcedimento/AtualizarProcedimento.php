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
    
    <h2 id="titulo">Atualizar Procedimento</h2>
    <h3 class="subtitulo">Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3 class="subtitulo">Obrigatorio Colocar o ID para identificação</h3>

    <form method="post">

    <div id="inputid">
    <p id="id">ID Procedimento</p> <input type="number" name="idproc" placeholder="Digite o ID" required><br>
    </div>

    <div id="inputcodigo">
    <p id="codigo">Código</p> <input type="number" name="codigo" placeholder="Digite o Código"><br>
    </div>

    <div id="inputnome">
    <p id="nome">Nome</p><input type="text" name="nomeproc" placeholder="Nome Procedimento"><br>
    </div>

    <div id="inputvalor">
    <p id="valor">Valor</p><input type="text" name="valor" placeholder="Digite o Valor" onkeypress="$(this).mask('#.##0.00', {reverse: true});"><br>
    </div>

    <div id="inputgenero">
    <p id="genero">Gênero</p><input type="text" name="genero" placeholder="Digite o Gênero"><br>
    </div>

    <div id="inputexcecao">
    <p id="excecao">Adicionar Exceção</p><input type="text" name="excecao" placeholder="Adicionar Exceção"><br>
    </div>

    <div id="botatu">
    <input id="botaoatualizarprocedimento" type="submit" value="Atualizar Procedimento">
    </div>
</form>

    <script src="../Script/Jquery.js"></script>
    <script src="../Script/JqueryMask.js"></script>
    <script src="../Script/Popper.js"></script>


    <?php
    
        if(isset($_POST['idproc'])){
            $idProc = addslashes($_POST['idproc']);
            $codigo = addslashes($_POST['codigo']);
            $nomeproc = addslashes($_POST['nomeproc']);
            $valor = addslashes($_POST['valor']);
            $genero = addslashes($_POST['genero']);
            $excecao = addslashes($_POST['excecao']);

            $p->conexao();

            $p->atualizarP($idProc,$codigo, $nomeproc, $valor, $genero, $excecao);
        }

    ?>

</body>
</html>
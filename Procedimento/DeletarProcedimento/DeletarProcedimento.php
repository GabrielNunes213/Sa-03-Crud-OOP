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
    <title>Apagar Procedimento</title>
    <link rel="stylesheet" href="DeletarProcedimento.css">
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

    <h2 id="titulo">Deletar Procedimento</h2>

    <form method="post">
        <div id="inputid">
        <p>ID Procedimento</p><input type="text" name="idproc" placeholder="Digite o ID" required><br><br>
        </div>
       
        <div id="botdel">
        <input id="botaodelprocedimento" type="submit" value="Deletar">
        </div>
    </form>
      
    <script src="../Script/Jquery.js"></script>
    <script src="../Script/JqueryMask.js"></script>
    <script src="../Script/Popper.js"></script>


    <?php
    
        if(isset($_POST['idproc'])){
            $idProc = addslashes($_POST['idproc']);

            $p->conexao();

            $p->deletarP($idProc);
        }
    
    ?>

</body>
</html>
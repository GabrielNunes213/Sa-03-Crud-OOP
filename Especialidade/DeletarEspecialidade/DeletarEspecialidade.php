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
    <title>Apagar Especialidade</title>
    <link  rel="stylesheet" href="DeletarEspecialidade.css">
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
             <li><a href="../TabelaEspecialidade/TabelaEspecialidade.php">Tabela Especialidade</a></li>
         </ul>
         <ul class="side-nav" id="menu-mobile">
             <li><a href="../../index.php">Início</a></li>
             <li><a href="../TabelaEspecialidade/TabelaEspecialidade.php">Tabela Especialidade</a></li>
         </ul>
     </div>
 </nav>


    <h2 id="titulo">Deletar Especialidade</h2>

    <form method="post">
        <div id="inputid">
        <p>ID Especialidade</p><input type="text" name="idesp" placeholder="Digite o ID" required><br><br>
        </div>

        <div id="botaodeletar">
        <input id="botaoenviar" type="submit" value="Deletar">
        </div>
    </form>

    <script src="../Navbar/Jquery.js"></script>
    <script src="../Navbar/Materialize.js"></script>
    <script>
    $(function(){
        $(".button-collapse").sideNav();});
    </script>

   <?php
   
    if(isset($_POST['idesp'])){
            
    $idEsp = addslashes($_POST['idesp']);

    
    $e->conexao();
    
    $e->deletar($idEsp);
    
    }
   
   ?>
      
</body>
</html>
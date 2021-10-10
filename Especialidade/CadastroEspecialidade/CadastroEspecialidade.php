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
    <title>Cadastro Especialidade</title>
    <link  rel="stylesheet" href="CadastroEspecialidade.css">
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



    <h2 id="titulo">Cadastrar Especialidade</h2>

    <form method="post">

        <div id="inputesp">
        <p>Nome Especialidade</p><input type="text" name="nomeE" placeholder="Nome da Especialidade" required><br><br>
        </div>

        <div id="botcadastrar">
        <input id="botaocadastrar" type="submit" value="Cadastrar">
        </div>
    </form>
    
    <script src="../Navbar/Jquery.js"></script>
    <script src="../Navbar/Materialize.js"></script>
    <script>
    $(function(){
        $(".button-collapse").sideNav();});
    </script>
      
    <?php
        if(isset($_POST['nomeE'])){
            
        $nome_esp = addslashes($_POST['nomeE']);
        
        $e->conexao();
        
        $e->cadastrar($nome_esp);
        
        }
    
    ?>
</body>
</html>
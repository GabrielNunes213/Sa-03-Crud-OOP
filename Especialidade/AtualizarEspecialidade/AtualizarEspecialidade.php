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
    <title>Atualizar Especialidade</title>
    <link  rel="stylesheet" href="AtualizarEspecialidade.css">
    <link href="../Navbar/font.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../Navbar/Materialize.css">
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



    <h2 id="titulo">Atualizar Especialidade</h2>
    <h3 class="subtitulo">Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3 class="subtitulo">Obrigatorio Colocar o ID para identificação</h3>
    <form  method="post">
        <div id="inputid">
        <p>ID Especialidade</p><input type="number" name="idesp" placeholder="Digite o ID" required><br><br>
        </div>

        <div id="inputnome">
        <p>Nome Especialidade</p><input type="text" name="nomeEsp" placeholder="Nome da Especialidade"><br><br>
        </div>

        <div id="botaoatu">
        <input id="botaoatualizar" type="submit" value="Atualizar Especialidade">
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
        $NomeEsp = addslashes($_POST['nomeEsp']);

        
        $e->conexao();
        
        $e->atualizar($idEsp,$NomeEsp);
        
        }

    ?>
      
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="Especialidade/Navbar/font.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="Especialidade/Navbar/Materialize.css">
</head>
<body>
    
<nav>
     <div class="nav-wrapper">
         <a href="#" class="brand-logo">Stetic Center</a>
         <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
         </a>
         <ul class="right hide-on-med-and-down">
             <li><a href="Especialidade/TabelaEspecialidade/TabelaEspecialidade.php">Tabela Especialidade</a></li>
             <li><a href="Medico/TabelaMedico/TabelaMedico.php">Tabela Medico</a></li>
             <li><a href="Procedimento/TabelaProcedimento/TabelaProcedimento.php">Tabela Procedimento</a></li>

         </ul>
         <ul class="side-nav" id="menu-mobile">
             <li><a href="Especialidade/TabelaEspecialidade/TabelaEspecialidade.php">Tabela Especialidade</a></li>
             <li><a href="Medico/TabelaMedico/TabelaMedico.php">Tabela Medico</a></li>
             <li><a href="Procedimento/TabelaProcedimento/TabelaProcedimento.php">Tabela Procedimento</a></li>
         </ul>
     </div>
 </nav>

    <h2 id="titulo">Tabelas</h2>
    
    <div id="centralizarbotoes">
    <button id="botesp"><a class="botoestagA" href="Especialidade/TabelaEspecialidade/TabelaEspecialidade.php">Especialidade</a></button>
    
    <button id="botmed"><a class="botoestagA"  href="Medico/TabelaMedico/TabelaMedico.php">Medico</a></button>
    
    <button id="botproc"><a class="botoestagA" href="Procedimento/TabelaProcedimento/TabelaProcedimento.php">Procedimento</a></button>
    
    </div>
        

    <script src="Especialidade/Navbar/Jquery.js"></script>
    <script src="Especialidade/Navbar/Materialize.js"></script>
    <script>
    $(function(){
        $(".button-collapse").sideNav();});
    </script>


</body>
</html>
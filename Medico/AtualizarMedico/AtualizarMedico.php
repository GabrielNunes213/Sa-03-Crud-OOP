<?php
    require_once '../Medico.php';
    $m = new Medico();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Médico</title>
    <link rel="stylesheet" href="AtualizarMedico.css">
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
             <li><a href="../TabelaMedico/TabelaMedico.php">Tabela Medico</a></li>
         </ul>
         <ul class="side-nav" id="menu-mobile">
             <li><a href="../../index.php">Início</a></li>
             <li><a href="../TabelaMedico/TabelaMedico.php">Tabela Medico</a></li>
         </ul>
     </div>
 </nav>


    <h2 id="titulo">Atualizar Médico</h2>
    <h3 class="subtitulo">Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3 class="subtitulo">Obrigatorio Colocar o ID para identificação</h3>

    <form method="post">

    <div id="inputid">
    <p>ID Médico</p> <input type="text" name="idmd" placeholder="Digite o ID" required><br>
    </div>
    
    <div id="inputnome">
    <p>Nome</p> <input type="text" name="nome" placeholder="Digite o Nome" minlenght="1" maxlength="100"><br>
    </div>
    
    <div id="inputrua">
    <p id="rua">Rua</p><input type="text" name="rua" placeholder="Digite a Rua" minlenght="1" maxlength="100"><br>
    </div>
    
    <div id="inputnumero">
    <p id="numero">Número</p><input type="number" name="numerorua" placeholder="N° Casa/Apartamento"><br>
    </div>
    
    <div id="inputbairro">
    <p>Bairro</p><input type="text" name="bairro" placeholder="Digite o Bairro" minlenght="1" maxlength="50"><br>
    </div>
    
    <div id="inputcep">
    <p>Cep</p><input type="text" name="cep" placeholder="Digite o CEP" minlenght="10" maxlength="10"  onkeypress="$(this).mask('00.000-000')"><br>
    </div>
    
    <div id="inputcomplemento">
    <p id="complemento">Complemento</p><input type="text" name="complemento" placeholder="Complemento"  minlenght="1" maxlength="60"><br>
    </div>
    
    <div id="inputemail">
    <p>Email</p><input type="email" name="email" placeholder="Digite o E-mail" minlenght="10" maxlength="80"><br>
    </div>
    
    <div id="inputcelular">
    <p>Celular</p><input type="tel" name="celular" placeholder="Digite o Celular" minlenght="15" maxlength="15" onkeypress="$(this).mask('(00) 90000-0000')"><br>
    </div>
    
    <div id="inputtelefonefix">
    <p id="telefixo">Telefone Fixo</p><input type="tel" name="telefonefixo" placeholder="Telefone Fixo" minlenght="14" maxlength="14" onkeypress="$(this).mask('(00) 0000-0000')"><br>
    </div>
    
    <div id="inputtelefonesec">
    <p id="telesec">Telefone Secundario</p><input type="tel" name="telefonesecundario" placeholder="Telefone Secundario" minlenght="14" maxlength="14" onkeypress="$(this).mask('(00) 0000-0000')"><br><br>
    </div>


    <div id="botaoatu">
    <input id="botaoatualizarmedico" type="submit" value="Atualizar Médico">
    </div>
    </form>

    <script src="../Script/Jquery.js"></script>
    <script src="../Script/JqueryMask.js"></script>
    <script src="../Script/Popper.js"></script>
    <script src="../Navbar/Materialize.js"></script>

    <?php
    
        if(isset($_POST['idmd'])){
            $id = addslashes($_POST['idmd']);
            $nome =  addslashes($_POST['nome']);
            $rua = addslashes($_POST['rua']);
            $numeroR = addslashes($_POST['numerorua']);
            $bairro = addslashes($_POST['bairro']);
            $cep = addslashes($_POST['cep']);
            $complemento = addslashes($_POST['complemento']);
            $email = addslashes($_POST['email']);
            $celular = addslashes($_POST['celular']);
            $telefonefix = addslashes($_POST['telefonefixo']);
            $telefonesecundario = addslashes($_POST['telefonesecundario']);

            $m->conexaoM();

            $m->atualizarM($id,$nome,$rua,$numeroR,$bairro,$cep,$complemento,$email,$celular,$telefonefix,$telefonesecundario);
        }
    
    ?>
</body>
</html>
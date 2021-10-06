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
    <title>Cadastro Médico</title>
    <link rel="stylesheet" href="CadastroMedico.css">
</head>
<body>
    
    <center>

    <h2>Cadastrar Médico</h2>

    <form method="post">
    <p>Nome</p> <input type="text" name="nome" placeholder="Digite seu Nome" required><br>
    <p>Rua</p><input type="text" name="rua" placeholder="Digite sua Rua" required><br>
    <p>Número</p><input type="number" name="numerorua" placeholder="N° Casa/Apartamento" required><br>
    <p>Bairro</p><input type="text" name="bairro" placeholder="Digite seu Bairro" required><br>
    <p>Cep</p><input type="text" name="cep" placeholder="Digite seu CEP" required><br>
    <p>Complemento</p><input type="text" name="complemento" placeholder="Complemento" required><br>
    <p>Email</p><input type="email" name="email" placeholder="Digite seu E-mail" required><br>
    <p>Celular</p><input type="tel" name="celular" placeholder="Digite seu Celular" required><br>
    <p>Telefone Fixo</p><input type="tel" name="telefonefixo" placeholder="Telefone Fixo" required><br>
    <p>Telefone Secundario</p><input type="tel" name="telefonesecundario" placeholder="Telefone Secundario" required><br><br>

    <input id="botaocadmedico" type="submit" value="Cadastrar Médico">
    </form>

    </center>


    <?php
    

        if(isset($_POST['nome']) and isset($_POST['rua']) and isset($_POST['numerorua']) and isset($_POST['bairro']) and isset($_POST['cep']) and isset($_POST['complemento']) and isset($_POST['email']) and isset($_POST['celular']) and isset($_POST['telefonefixo']) and isset($_POST['telefonesecundario'])){
            $nome =  $_POST['nome'];
            $rua = $_POST['rua'];
            $numeroR = $_POST['numerorua'];
            $bairro = $_POST['bairro'];
            $cep = $_POST['cep'];
            $complemento = $_POST['complemento'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $telefonefix = $_POST['telefonefixo'];
            $telefonesecundario = $_POST['telefonesecundario'];

            $m->conexaoM("localhost","banco_Sa_03","root","");

            $m->cadastrarM($nome,$rua,$numeroR,$bairro,$cep,$complemento,$email,$celular,$telefonefix,$telefonesecundario);
        }
    
    ?>

</body>
</html>
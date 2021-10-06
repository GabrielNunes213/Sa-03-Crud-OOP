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
</head>
<body>

    <center>

    <h2>Atualizar Médico</h2>
    <h3>Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3>Obrigatorio Colocar o ID para identificação</h3>

    <form method="post">
    <p>ID Médico</p> <input type="text" name="idmd" placeholder="Digite o ID" required><br>
    <p>Nome</p> <input type="text" name="nome" placeholder="Digite o Nome"><br>
    <p>Rua</p><input type="text" name="rua" placeholder="Digite a Rua"><br>
    <p>Número</p><input type="number" name="numerorua" placeholder="N° Casa/Apartamento"><br>
    <p>Bairro</p><input type="text" name="bairro" placeholder="Digite o Bairro"><br>
    <p>Cep</p><input type="text" name="cep" placeholder="Digite o CEP"><br>
    <p>Complemento</p><input type="text" name="complemento" placeholder="Complemento"><br>
    <p>Email</p><input type="email" name="email" placeholder="Digite o E-mail"><br>
    <p>Celular</p><input type="tel" name="celular" placeholder="Digite o Celular"><br>
    <p>Telefone Fixo</p><input type="tel" name="telefonefixo" placeholder="Telefone Fixo"><br>
    <p>Telefone Secundario</p><input type="tel" name="telefonesecundario" placeholder="Telefone Secundario"><br><br>

    <input id="botaoatualizarmedico" type="submit" value="Atualizar Médico">
    </form>

    </center>

    <?php
    
        if(isset($_POST['idmd'])){
            $id = $_POST['idmd'];
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

            $m->atualizarM($id,$nome,$rua,$numeroR,$bairro,$cep,$complemento,$email,$celular,$telefonefix,$telefonesecundario);
        }
    
    ?>
</body>
</html>
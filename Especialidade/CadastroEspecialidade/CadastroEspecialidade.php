<?php
    require_once 'C:\xampp\htdocs\AtivsPHP\TII2002T-03\Gabriel\SA-03-CRUD-OOP\Especialidade\Especialidade.php';
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
</head>
<body>

    
    <center>

    <h2>Cadastrar Especialidade</h2>

    <form method="post">
        <p>Nome Especialidade</p><input type="text" name="nomeE" placeholder="Nome da Especialidade" required><br><br>
        
        <input id="botaocadastrar" type="submit" value="Cadastrar">
    </form>
    </center>
      
    <?php
        if(isset($_POST['nomeE'])){
            
        $nome_esp = addslashes($_POST['nomeE']);
        
        $e->conexao("localhost","banco_Sa_03","root","");
        
        $e->cadastrar($nome_esp);
        
        }
    
    ?>
</body>
</html>
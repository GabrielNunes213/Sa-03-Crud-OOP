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
    <title>Atualizar Especialidade</title>
    <link  rel="stylesheet" href="AtualizarEspecialidade.css">
</head>
<body>

    <center>

    <h2>Atualizar Especialidade</h2>
    <h3>Escreva apenas nos campos que você deseja atualizar, deixe os outros vazios.</h3>
    <h3>Obrigatorio Colocar o ID para identificação</h3>
    <form  method="post">
        <p>ID Especialidade</p><input type="number" name="idesp" placeholder="Digite o ID" required><br><br>
        <p>Nome Especialidade</p><input type="text" name="nomeEsp" placeholder="Nome da Especialidade"><br><br>
        <input id="botaoatualizar" type="submit" value="Atualizar Especialidade">
    </form>

    </center>

    <?php
    
    if(isset($_POST['idesp'])){
            
        $idEsp = addslashes($_POST['idesp']);
        $NomeEsp = addslashes($_POST['nomeEsp']);

        
        $e->conexao("localhost","banco_Sa_03","root","");
        
        $e->atualizar($idEsp,$NomeEsp);
        
        }

    ?>
      
</body>
</html>
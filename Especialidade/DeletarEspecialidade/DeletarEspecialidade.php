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
</head>
<body>

    <center>
    <h2>Deletar Especialidade</h2>

    <form method="post">
        <p>ID Especialidade</p><input type="text" name="idesp" placeholder="Digite o ID" required><br><br>
        <input id="botaoenviar" type="submit" value="Deletar">
    </form>

   </center>

   <?php
   
    if(isset($_POST['idesp'])){
            
    $idEsp = addslashes($_POST['idesp']);

    
    $e->conexao("localhost","banco_Sa_03","root","");
    
    $e->deletar($idEsp);
    
    }
   
   ?>
      
</body>
</html>
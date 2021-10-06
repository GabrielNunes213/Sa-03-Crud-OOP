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
    <title>Apagar Medico</title>
    <link rel="stylesheet" href="DeletarMedico.css">
</head>
<body>

    <center>

    <h2>Deletar Médico</h2>

    <form method="post">
        <p>ID Médico</p><input type="number" name="idmed" placeholder="Digite o ID" required><br><br>
        <input id="botaodelmedico" type="submit" value="Deletar">
    </form>

    </center>

    <?php
    
        if(isset($_POST['idmed'])){
            $id = $_POST['idmed'];
            
            $m->conexaoM("localhost","banco_Sa_03","root","");

            $m->deletarM($id);
        }
    
    ?>
      
</body>
</html>
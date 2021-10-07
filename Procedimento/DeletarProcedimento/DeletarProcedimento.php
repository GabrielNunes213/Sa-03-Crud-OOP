<?php
    require_once '../Procedimento.php';
    $p = new Procedimento();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Procedimento</title>
    <link rel="stylesheet" href="DeletarProcedimento.css">
</head>
<body>

    <center>

    <h2>Deletar Procedimento</h2>

    <form method="post">
        <p>ID Procedimento</p><input type="text" name="idproc" placeholder="Digite o ID" required><br><br>
        <input id="botaodelprocedimento" type="submit" value="Deletar">
    </form>
      
    </center>


    <?php
    
        if(isset($_POST['idproc'])){
            $idProc = $_POST['idproc'];

            $p->conexao("localhost","banco_Sa_03","root","");

            $p->deletarP($idProc);
        }
    
    ?>

</body>
</html>
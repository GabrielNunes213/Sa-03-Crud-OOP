<?php

    class Especialidade {
        private $pdo;
   
    public function conexao($host, $dbname, $user, $senha){
    try{
        $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$senha);
    }
    catch(PDOException $e){
        echo "Erro no Banco de Dados: ".$e->getMessage();
    }
    catch(Exception $e) {
        echo "Ocorreu um erro: ".$e->getMessage();
    }
    }

    public function cadastrar($nome_especialidade){
        global $pdo;

        $con = $pdo->prepare("INSERT INTO Especialidade (nome_especialidade) VALUES (:ne)");
        $con->bindValue(":ne",$nome_especialidade);
        $con->execute();
    }

}    


?>
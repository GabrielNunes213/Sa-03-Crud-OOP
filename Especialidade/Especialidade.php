<?php

    class Especialidade {
        private $pdo;
   
    public function conexao($host, $dbname, $user, $senha){
    try{
        $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$senha);
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
        
        $con = $this->pdo->prepare("SELECT nome_especialidade FROM Especialidade WHERE nome_especialidade = :ne");
        $con->bindValue(":ne", $nome_especialidade);
        $con->execute();

        if($con->rowCount() > 0){ 
            echo "Esta especialidade ja está cadastrada";
        } else {
        $con = $this->pdo->prepare("INSERT INTO Especialidade (nome_especialidade) VALUES (:ne)");
        $con->bindValue(":ne",$nome_especialidade);
        $con->execute();
        }
    }


    public function atualizar($idEsp,$nomeEsp){
        global $pdo;

        if(!empty($nomeEsp)){
        $con = $this->pdo->prepare("UPDATE Especialidade SET nome_especialidade = :ne WHERE id_especialidade = :id");
        $con->bindValue(":ne",$nomeEsp);
        $con->bindValue(":id",$idEsp);
        $con->execute();

        echo "Atualizado com sucesso!";
        }
    }

    public function deletar($idEsp){
        global $pdo;

        if(!empty($idEsp)){
            $con = $this->pdo->prepare("DELETE FROM Especialidade WHERE id_especialidade = :id");
            $con->bindValue(":id",$idEsp);
            $con->execute();

            echo "ID ". $idEsp ." Deletado com Sucesso!";
        }
    }

    public function TabelaEsp(){
        global $pdo;

        $con = $this->pdo->prepare("SELECT * FROM Especialidade");
        $con->execute();
        
        $cmd = $con;
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

        foreach($res as $valor){
            echo "<tr>";
            echo "<td>".$valor['id_especialidade']."</td>";
            echo "<td>".$valor['nome_especialidade']."</td>";
            echo "</tr>";
        }

    }

}    


?>
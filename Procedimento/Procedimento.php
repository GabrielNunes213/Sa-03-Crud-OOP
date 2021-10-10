<?php

    class Procedimento {
        private $pdo;

        public function conexao(){
        $host = "localhost";
        $dbname = "banco_Sa_03";
        $user = "root";
        $senha = "";

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

        public function cadastrarP($codigo, $nomeproc, $valor, $genero, $excecao){
            global $pdo;

            $con = $this->pdo->prepare("SELECT codigo FROM Procedimento WHERE codigo = :co");
            $con->bindValue(":co", $codigo);
            $con->execute();
    
            if($con->rowCount() > 0){ 
                echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>Este Codigo ja está cadastrado</div>";
            } else {
            $con = $this->pdo->prepare("INSERT INTO Procedimento (codigo,nomeproc,valor,genero,addexcecao) VALUES (:co,:np,:v,:g,:ex)");
            $con->bindValue(":co",$codigo);
            $con->bindValue(":np",$nomeproc);
            $con->bindValue(":v",$valor);
            $con->bindValue(":g",$genero);
            $con->bindValue(":ex",$excecao);
            $con->execute();

            echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>Cadastro Realizado com Sucesso!</div>";
            }
        }

        public function atualizarP($idProc,$codigo, $nomeproc, $valor, $genero, $excecao){
            global $pdo;

            $con = $this->pdo->prepare("SELECT codigo FROM Procedimento WHERE codigo = :co");
            $con->bindValue(":co", $codigo);
            $con->execute();
    
            if($con->rowCount() > 0){ 
                echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>Este Codigo ja está cadastrado</div>";
            } else {
            if(!empty($codigo)){
                $con = $this->pdo->prepare("UPDATE Procedimento SET codigo = :co WHERE id_procedimento = :id");
                $con->bindValue(":co",$codigo);
                $con->bindValue(":id",$idProc);
                $con->execute();
            }
            }

            if(!empty($nomeproc)){
                $con = $this->pdo->prepare("UPDATE Procedimento SET nomeproc = :np WHERE id_procedimento = :id");
                $con->bindValue(":np",$nomeproc);
                $con->bindValue(":id",$idProc);
                $con->execute();
            }

            if(!empty($valor)){
                $con = $this->pdo->prepare("UPDATE Procedimento SET valor = :v WHERE id_procedimento = :id");
                $con->bindValue(":v",$valor);
                $con->bindValue(":id",$idProc);
                $con->execute();
            }

            if(!empty($genero)){
                $con = $this->pdo->prepare("UPDATE Procedimento SET genero = :g WHERE id_procedimento = :id");
                $con->bindValue(":g",$genero);
                $con->bindValue(":id",$idProc);
                $con->execute();
            }

            if(!empty($excecao)){
                $con = $this->pdo->prepare("UPDATE Procedimento SET addexcecao = :ex WHERE id_procedimento = :id");
                $con->bindValue(":ex",$excecao);
                $con->bindValue(":id",$idProc);
                $con->execute();
            }
        }

        public function deletarP($idProc){
            global $pdo;

            if(!empty($idProc)){
                $con = $this->pdo->prepare("DELETE FROM Procedimento WHERE id_procedimento = :id");
                $con->bindValue(":id",$idProc);
                $con->execute();
    
                echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>ID ". $idProc ." Deletado com Sucesso!</div>";
            }
        }

        public function TabelaProcedimento(){
            global $pdo;

            $con = $this->pdo->prepare("SELECT * FROM Procedimento");
            $con->execute();

            $cmd = $con;
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_procedimento']."</td>";
                echo "<td>".$valor['codigo']."</td>";
                echo "<td>".$valor['nomeproc']."</td>";
                echo "<td>".$valor['valor']."</td>";
                echo "<td>".$valor['genero']."</td>";
                echo "<td>".$valor['addexcecao']."</td>";
                echo "</tr>";
            }
        }
    }

?>
<?php

    class Medico {
        private $pdo;

        public function conexaoM(){
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

        
        public function cadastrarM($nome,$rua,$numeroR,$bairro,$cep,$complemento,$email,$celular,$telefonefix,$telefonesecundario){
            global $pdo;

        $con = $this->pdo->prepare("SELECT email FROM Medico WHERE email = :email");
        $con->bindValue(":email", $email);
        $con->execute();

        if($con->rowCount() > 0){ 
            echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>Este Medico ja está cadastrado</div>";
        } else {
        $con = $this->pdo->prepare("INSERT INTO Medico (nome,rua,numero,bairro,cep,complemento,email,celular,telefonefixo,telefonesecundario) VALUES (:n,:rua,:num,:bai,:cep,:comp,:email,:cel,:telefix,:telesec)");
        $con->bindValue(":n",$nome);
        $con->bindValue(":rua",$rua);
        $con->bindValue(":num",$numeroR);
        $con->bindValue(":bai",$bairro);
        $con->bindValue(":cep",$cep);
        $con->bindValue(":comp",$complemento);
        $con->bindValue(":email",$email);
        $con->bindValue(":cel",$celular);
        $con->bindValue(":telefix",$telefonefix);
        $con->bindValue(":telesec",$telefonesecundario);
        $con->execute();
        }
        }


        public function atualizarM($id,$nome,$rua,$numeroR,$bairro,$cep,$complemento,$email,$celular,$telefonefix,$telefonesecundario){
            if(!empty($id) and !empty($nome)){
                $con = $this->pdo->prepare("UPDATE Medico SET nome = :n WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":n",$nome);
                $con->execute();
            }

            if(!empty($id) and !empty($rua)){
                $con = $this->pdo->prepare("UPDATE Medico SET rua = :rua WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":rua",$rua);
                $con->execute();
            }

            if(!empty($id) and !empty($numeroR)){
                $con = $this->pdo->prepare("UPDATE Medico SET numero = :num WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":num",$numeroR);
                $con->execute();
            }

            if(!empty($id) and !empty($bairro)){
                $con = $this->pdo->prepare("UPDATE Medico SET bairro = :bai WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":bai",$bairro);
                $con->execute();
            }

            if(!empty($id) and !empty($cep)){
                $con = $this->pdo->prepare("UPDATE Medico SET cep = :cep WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":cep",$cep);
                $con->execute();
            }

            if(!empty($id) and !empty($complemento)){
                $con = $this->pdo->prepare("UPDATE Medico SET complemento = :comp WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":comp",$complemento);
                $con->execute();
            }

            if(!empty($id) and !empty($email)){
                $con = $this->pdo->prepare("UPDATE Medico SET email = :email WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":email",$email);
                $con->execute();
            }

            if(!empty($id) and !empty($celular)){
                $con = $this->pdo->prepare("UPDATE Medico SET celular = :cel WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":cel",$celular);
                $con->execute();
            }

            if(!empty($id) and !empty($telefonefix)){
                $con = $this->pdo->prepare("UPDATE Medico SET telefonefixo = :telefix WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":telefix",$telefonefix);
                $con->execute();
            }

            if(!empty($id) and !empty($telefonesecundario)){
                $con = $this->pdo->prepare("UPDATE Medico SET telefonesecundario = :telesec WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->bindValue(":telesec",$telefonesecundario);
                $con->execute();
            }

            if(empty($nome) and empty($rua) and empty($numeroR) and empty($bairro) and empty($cep) and empty($complemento) and empty($email) and empty($celular) and empty($telefonefix) and empty($telefonesecundario)){
               echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>Os campos estão todos vazios, nada foi atualizado.</div>"; 
            }            
        }

        public function deletarM($id){
            global $pdo;

            if(!empty($id)){
                $con = $this->pdo->prepare("DELETE FROM Medico WHERE id_medico = :id");
                $con->bindValue(":id",$id);
                $con->execute();
    
                echo "<div style='font-size: 18px;text-align: center; margin-top: 30px;'>ID ". $id ." Deletado com Sucesso!</div>";
            }
        }

        public function TabelaMedico(){
            global $pdo;

            $con = $this->pdo->prepare("SELECT * FROM Medico");
            $con->execute();

            $cmd = $con;
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_medico']."</td>";
                echo "<td>".$valor['nome']."</td>";
                echo "<td>".$valor['rua']."</td>";
                echo "<td>".$valor['numero']."</td>";
                echo "<td>".$valor['bairro']."</td>";
                echo "<td>".$valor['cep']."</td>";
                echo "<td>".$valor['complemento']."</td>";
                echo "<td>".$valor['email']."</td>";
                echo "<td>".$valor['celular']."</td>";
                echo "<td>".$valor['telefonefixo']."</td>";
                echo "<td>".$valor['telefonesecundario']."</td>";
                echo "</tr>";
            }
        }
    }

?>
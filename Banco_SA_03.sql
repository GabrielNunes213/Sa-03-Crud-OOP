CREATE DATABASE banco_Sa_03;

#SELECT @@autocommit;
 
 SET @@autocommit = OFF;


USE	banco_Sa_03;

START TRANSACTION;

CREATE TABLE Especialidade (
id_especialidade INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_especialidade VARCHAR(45)
);

SAVEPOINT tabela_especialidade;

CREATE TABLE Medico (
id_medico INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome VARCHAR(45),
rua VARCHAR(30),
numero INT,
bairro VARCHAR(40),
cep CHAR(9),
complemento VARCHAR(30),
email VARCHAR(40),
celular CHAR(15),
telefonefixo CHAR(14),
telefonesecundario CHAR(14)
);

SAVEPOINT tabela_medico;

CREATE TABLE Procedimento (
id_procedimento INT NOT NULL AUTO_INCREMENT,
codigo INT NOT NULL,
nomeproc VARCHAR(30),
valor FLOAT,
genero VARCHAR(10),
addexcecao VARCHAR(40),
PRIMARY KEY (id_procedimento, codigo)
);

SAVEPOINT tabela_procedimento;

DELETE FROM Especialidade WHERE id_especialidade = 1;

ROLLBACK TO tabela_procedimento;

COMMIT;

CREATE USER 'usuario_especialidade'@'localhost' 
IDENTIFIED BY 'usuario';

GRANT SELECT 
ON banco_SA_03.Especialidade
TO 'usuario_especialidade'@'localhost';

#---------------------------------------------

CREATE USER 'usuario_medico'@'localhost' 
IDENTIFIED BY 'usuario';

GRANT SELECT 
ON banco_SA_03.Medico
TO 'usuario_medico'@'localhost';

#---------------------------------------------

CREATE USER 'usuario_procedimento'@'localhost' 
IDENTIFIED BY 'usuario';

GRANT SELECT 
ON banco_SA_03.Procedimento
TO 'usuario_procedimento'@'localhost';

SELECT * FROM Especialidade;
SELECT * FROM Medico;
SELECT * FROM Procedimento;

#DROP DATABASE banco_SA_03;
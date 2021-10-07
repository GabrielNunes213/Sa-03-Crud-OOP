CREATE DATABASE banco_Sa_03;

USE	banco_Sa_03;

CREATE TABLE Especialidade (
id_especialidade INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_especialidade VARCHAR(45)
);

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
telefonefixo BIGINT(15),
telefonesecundario BIGINT(15)
);

CREATE TABLE Procedimento (
id_procedimento INT NOT NULL AUTO_INCREMENT,
codigo INT NOT NULL,
nomeproc VARCHAR(30),
valor FLOAT,
genero VARCHAR(35),
addexcecao VARCHAR(40),
PRIMARY KEY (id_procedimento, codigo)
);

SELECT * FROM Especialidade;
SELECT * FROM Medico;
SELECT * FROM Procedimento;

#DROP DATABASE banco_SA_03;
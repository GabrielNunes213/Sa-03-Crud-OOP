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

SELECT * FROM Especialidade;
SELECT * FROM Medico;
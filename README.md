# Projeto_udemy_php_1
Projeto de um dos curso da udemy sobre php e mysql.

MYSQL SIMPLES DO PROJETO

OBS: SEM OS RELACIONAMENTOS NO MOMENTO


CREATE TABLE estoque (

id_estoque INT PRIMARY KEY AUTO_INCREMENT,
nroproduto INT NOT NULL,
nomeproduto VARCHAR(200) NOT NULL,
categoria VARCHAR(100) NOT NULL,
quantidade INT NOT NULL,
fornecedor VARCHAR(100) NOT NULL

);

CREATE TABLE categoria (

id_categoria INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NUL

);

CREATE TABLE fornecedor (

id_fornecedor INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NUL

)

===============================
 Tabela: clientes
===============================

CREATE TABLE clientes (
id int AUTO_INCREMENT PRIMARY KEY,
cliente VARCHAR(150) NOT NULL,
cidade VARCHAR(150),
estado VARCHAR(50)
)

===============================
Tabela: produtos
===============================

CREATE TABLE produtos (
id int AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
preco FLOAT
)
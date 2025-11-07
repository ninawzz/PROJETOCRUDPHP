# 🧩 CRUD de Clientes e Produtos

Nesse projeto foi desenvolvido operações **CRUD (Create, Read, Update, Delete)** para **clientes** e **produtos**, utilizando **PHP**, **MySQL** e **Bootstrap**.
O sistema permite o gerenciamento simples e eficiente de cadastros, com foco em organização e usabilidade.

---

## 🎯 Tema do Projeto
**Sistema de Cadastro e Gerenciamento de Clientes e Produtos**

O sistema permite:
* Cadastrar, visualizar, editar e excluir **clientes** e **produtos**;
* Interface simples com navegação entre abas

---

## 🧱 Estrutura do Projeto


```sql
projeto1/
├── admin/
│   ├── admin_clientes.php
│   ├── altera_clientes.php
│   ├── cadastra_clientes.php
│   ├── config.inc.php
│   ├── delete_cliente.php
│   ├── form_clientes.php 
│   ├── form_clientes_alterar.php 
│   └── index.php
│
├── adminp/
│   ├── admin_produtos.php
│   ├── altera_produtos.php
│   ├── cadastra_produtos.php
│   ├── config.inc.php
│   ├── delete_produtos.php
│   ├── form_produtos.php 
│   ├── form_produtos_alterar.php 
│   └── index.php
├── clientes.php
├── conteudo.php
├── faleconosco.php    
├── index.php 
├── menu.php
├── modelo.html
├── produtos.php
├── quemsomos.php
├── rodape.php  
├── topo.php
└── README.md
```

## 🗄️ Banco de Dados
O sistema utiliza o banco projeto1, que contém as tabelas clientes e produtos.

Script SQL (projeto1.sql)
```-- Criação do banco de dados

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
 ```

## ⚙️ Como Executar o Projeto

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/ninawzz/PROJETOCRUDPHP.git
   ```

2. **Mover para o diretório do XAMPP:**
Coloque a pasta dentro do diretório htdocs, por exemplo:
 ```bash
C:\xampp\htdocs\projeto1
  ```
3. **Importar o banco de dados:**
Abra o phpMyAdmin, clique em Importar, e selecione o arquivo:
 ```
projeto1.sql
 ```
4. Iniciar o servidor 
- Inicie Apache e MySQL no XAMPP Control Panel
- Acesse no navegador:
 ```
http://localhost/PROJETOCRUDPHP/projeto1/
 ```
---

## 👥 Integrantes do Projeto
- Mariana Macedo de Farias Souza
- Kaio Souto Rodrigues
- Nina Coutinho Rosas Trocolli

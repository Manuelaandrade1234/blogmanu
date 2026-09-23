# Agenda de Contatos

A **Agenda de Contatos** é uma aplicação web desenvolvida em PHP para cadastrar e gerenciar contatos de forma simples e organizada.

O projeto permite armazenar informações como nome, telefone e observações, além de oferecer operações completas de cadastro, consulta, edição e exclusão dos registros.

## Sobre o projeto

A aplicação foi desenvolvida com o objetivo de colocar em prática conceitos de desenvolvimento Back-End com PHP, integração com banco de dados e manipulação de informações através de operações CRUD.

Os contatos cadastrados ficam armazenados no banco de dados e podem ser gerenciados diretamente pela interface do sistema.

## Principais funcionalidades

- Cadastro de contatos
- Listagem de contatos cadastrados
- Visualização individual de contatos
- Edição de contatos
- Exclusão de contatos
- Cadastro de nome
- Cadastro de telefone
- Campo para observações
- Mensagens de confirmação após as operações
- Persistência das informações no banco de dados

## CRUD

O sistema implementa as principais operações de um CRUD:

- **Create:** criação de novos contatos
- **Read:** consulta e visualização dos contatos
- **Update:** atualização das informações cadastradas
- **Delete:** exclusão de contatos

## Tecnologias utilizadas

- PHP
- HTML5
- CSS3
- MySQL
- PDO
- Bootstrap
- Font Awesome

## Banco de dados

A aplicação utiliza banco de dados para armazenar os contatos cadastrados.

Cada contato pode possuir informações como:

- Nome
- Telefone
- Observações

A comunicação entre PHP e banco de dados é realizada utilizando **PDO**, com consultas preparadas para executar as operações do sistema.

## Estrutura do projeto

```text
agenda/
│
├── config/
│   ├── connection.php
│   ├── process.php
│   └── url.php
│
├── css/
│   └── styles.css
│
├── img/
│
├── templates/
│   ├── header.php
│   ├── footer.php
│   └── backbtn.html
│
├── create.php
├── edit.php
├── index.php
└── show.php
```

## Como funciona

Na página inicial, o usuário pode visualizar todos os contatos cadastrados.

Para cada contato, o sistema disponibiliza opções para:

- Visualizar informações
- Editar dados
- Excluir o contato

Também é possível cadastrar um novo contato informando nome, telefone e observações.

## Objetivo do projeto

O projeto foi desenvolvido com o objetivo de praticar conceitos importantes de desenvolvimento web, incluindo:

- Desenvolvimento Back-End com PHP
- Integração com banco de dados
- Utilização de PDO
- Consultas SQL
- Formulários HTML
- Operações CRUD
- Organização de arquivos e componentes
- Manipulação de sessões em PHP

## Desenvolvedora

**Manuela Andrade**

Desenvolvedora Full Stack  
Estudante de Análise e Desenvolvimento de Sistemas

> Ideias que viram soluções.

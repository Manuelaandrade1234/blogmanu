# Blog Codar

O **Blog Codar** é um projeto web desenvolvido em PHP com foco na publicação e organização de conteúdos relacionados à programação e tecnologia.

A aplicação apresenta diferentes posts sobre desenvolvimento de software, linguagens de programação e conceitos importantes para quem está estudando ou trabalhando na área de tecnologia.

## Sobre o projeto

O projeto foi desenvolvido para praticar conceitos de desenvolvimento web utilizando PHP, além de trabalhar com organização de arquivos, componentes reutilizáveis e exibição dinâmica de informações.

Os conteúdos dos posts são armazenados em estruturas de dados em PHP e exibidos automaticamente nas páginas do blog.

## Principais funcionalidades

- Listagem de posts na página inicial
- Visualização individual de cada publicação
- Exibição de título e descrição dos posts
- Imagens para cada publicação
- Sistema de tags
- Listagem de categorias
- Navegação entre as páginas do blog
- Estrutura reutilizável de cabeçalho e rodapé

## Conteúdos do blog

O projeto possui publicações relacionadas a temas como:

- PHP
- Java
- Programação Orientada a Objetos
- Lógica de programação
- Algoritmos
- Desenvolvimento web

## Categorias

O blog possui categorias relacionadas às principais tecnologias estudadas no desenvolvimento web e de software:

- PHP
- HTML
- CSS
- JavaScript
- Bootstrap
- Java
- C#

## Tecnologias utilizadas

- PHP
- HTML5
- CSS3

## Estrutura do projeto

```text
blogmanu/
│
├── css/
│   └── style.css
│
├── data/
│   ├── categories.php
│   └── posts.php
│
├── helpers/
│   └── url.php
│
├── img/
│
├── templetes/
│   ├── header.php
│   └── footer.php
│
├── categorias.php
├── contatos.php
├── index.php
├── post.php
└── sobre.php
```

## Organização dos dados

Os posts são armazenados no arquivo:

```text
data/posts.php
```

Cada publicação possui informações como:

- ID
- Título
- Descrição
- Tags
- Imagem

As categorias são organizadas separadamente no arquivo:

```text
data/categories.php
```

Essa estrutura permite que o conteúdo seja exibido dinamicamente utilizando PHP.

## Página de publicação

Cada post possui uma página individual acessada através de seu identificador.

O sistema utiliza o parâmetro `id` da URL para localizar e apresentar o conteúdo correspondente.

Exemplo:

```text
post.php?id=1
```

## Objetivo do projeto

O Blog Codar foi desenvolvido com o objetivo de praticar:

- Desenvolvimento web com PHP
- Manipulação de arrays
- Estruturas de repetição
- Parâmetros via URL
- Organização de projetos PHP
- Reutilização de componentes
- Exibição dinâmica de conteúdo
- HTML e CSS

## Status do projeto

O projeto está em desenvolvimento e pode receber melhorias futuras, como:

- Conteúdo completo para os posts
- Página de categorias funcional
- Página Sobre
- Página de contato
- Busca de publicações
- Banco de dados
- Área administrativa para criação de posts

## Desenvolvedora

**Manuela Andrade**

Desenvolvedora Full Stack  
Estudante de Análise e Desenvolvimento de Sistemas

> Ideias que viram soluções.

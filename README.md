<h1 align="center">DSWEB - Gerenciador de Filmes</h1>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
</p>

Este repositório faz parte dos estudos desenvolvidos durante o curso de **Desenvolvimento de Sistemas do SENAI**. O projeto integra conhecimentos de **PHP** com **Banco de Dados MariaDB**, implementando um sistema completo de **CRUD** (Create, Read, Update e Delete) aplicado a um gerenciador de filmes.

---

## 📌 Índice
- [Sobre o Projeto](#sobre-o-projeto)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Como Executar Localmente](#como-executar-localmente)

---

## Sobre o Projeto

O **Gerenciador de Filmes** é uma aplicação web desenvolvida em PHP que se comunica com um banco de dados **MariaDB** para realizar operações de gerenciamento de filmes. O sistema permite cadastrar, visualizar, editar e remover filmes de forma simples e intuitiva, com filtros de segurança no back-end para evitar bugs e acessos indevidos.

---

## Funcionalidades

- **Cadastrar** um novo filme com as seguintes informações:
  - Título
  - Ano de lançamento
  - Gênero
  - Sinopse

-  **Editar** as informações de um filme já cadastrado, podendo alterar qualquer um dos 4 campos.

-  **Deletar** um filme existente do banco de dados.

-  **Listar** todos os filmes cadastrados em uma tabela atualizada dinamicamente, com dados buscados diretamente do banco de dados.

-  **Segurança**: O back-end conta com filtros de entrada nos cadastros e alterações para prevenir bugs e acessos indevidos.

---

## Tecnologias Utilizadas

### <img height="25" src="https://skillicons.dev/icons?i=php&theme=dark"/> PHP
- Responsável por toda a lógica de back-end.
- Comunicação com o banco de dados via queries SQL.
- Filtros de validação e sanitização de entradas.

### <img height="25" src="https://skillicons.dev/icons?i=mysql&theme=dark"/> MariaDB
- Banco de dados relacional utilizado para armazenar os filmes.
- Estrutura criada e populada automaticamente via arquivo `.sql` incluso no repositório.

### <img height="25" src="https://skillicons.dev/icons?i=html&theme=dark"/> HTML5 + <img height="25" src="https://skillicons.dev/icons?i=css&theme=dark"/> CSS3
- Interface de usuário para interação com o sistema.

---

## Como Executar Localmente

Para rodar este projeto na sua máquina, você precisará de um ambiente de servidor local com suporte a PHP e MariaDB. Recomendamos o uso do **XAMPP**.

---

### 1. Instalando o XAMPP

1. Acesse o site oficial: [https://www.apachefriends.org](https://www.apachefriends.org/index.html)
2. Baixe a versão compatível com o seu sistema operacional (Windows, Linux ou macOS).
3. Execute o instalador e siga as instruções na tela.
4. Após a instalação, abra o **XAMPP Control Panel**.
5. Inicie os módulos **Apache** e **MySQL** clicando em **Start** para cada um.

> ⚠️ O XAMPP utiliza **MariaDB** como banco de dados sob o módulo "MySQL". Os dois são compatíveis entre si.

---

### 2. Clonando e Configurando o Projeto

1. Clone este repositório dentro da pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs` no Windows):

   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```

2. Após clonar, a estrutura ficará assim:
   ```
   C:\xampp\htdocs\seu-repositorio\
   ```

---

### 3. Criando o Banco de Dados com o phpMyAdmin

O repositório inclui o arquivo **`filmes.sql`**, que contém todos os comandos necessários para criar o banco de dados, as tabelas e inserir alguns registros iniciais automaticamente.

Siga os passos abaixo para importá-lo:

1. Com o Apache e o MySQL rodando no XAMPP, acesse o **phpMyAdmin** pelo navegador:
   ```
   http://localhost/phpmyadmin
   ```

2. Com o phpMyAdmin aberto, clique na aba **Importar** no menu superior.

3. Clique em **Procurar** e selecione o arquivo `filmes.sql` localizado na raiz do repositório clonado.

4. Clique em **Executar** no final da página.

5. Após a importação bem-sucedida, você verá o banco de dados com as tabelas e os registros base já criados.

---

### 4. Acessando o Sistema

Com tudo configurado, acesse o projeto pelo navegador:

```
http://localhost/seu-repositorio/
```

O sistema estará pronto para uso! 

---

> Projeto desenvolvido como parte do curso de **Desenvolvimento de Sistemas - SENAI**.

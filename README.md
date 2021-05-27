# NAAP-back-end

## Introduction

This project is meant to be distributed as a practical test for a job proposal at NAAP Solutions as well as an easy-to-access repo for learning about the basics of Laravel.

The project was made using Visual Studio Code IDE with Laravel for the creation of an API that can do basic CRUD and other simple queries on a PostgreSQL database.

## Requirements

* [VSCode IDE](https://code.visualstudio.com/Download)
* [GIT](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* [PHP](https://www.php.net/downloads.php) OR [Wamp](https://www.wampserver.com/en/) and similars.

* A database built in PostgreSQL with the following tables:

> produtos:
> * id int (or serial)
> * nome varchar(256)
> * quantidade int
> * preco numeric
> * created_at timestamp
> * updated_at timestamp

> pedidos:
> * id int (or serial)
> * total varchar(256)
> * data timestamp
> * created_at timestamp
> * updated_at timestamp

> pedido_items:
> * id int (or serial)
> * produto_id int
> * pedido_id int
> * total numeric
> * quantidade int
> * created_at timestamp
> * updated_at timestamp

## Installation

* Download and install the required tools;

* Make sure you have database just like the above;

* Make sure that these Dynamic Extensions are NOT commented in your php.ini configuration file (found in your php installation folder):

> * extension=curl
> * extension=fileinfo
> * extension=mbstring
> * extension=openssl
> * extension=pdo_pgsql
> * extension=pgsql

* In VSCode, open a new folder/create a new project;
* Open the terminal (Terminal -> New Terminal);
* Initialize the folder as a git repo:

> git init

* Add the repo:

> git remote add origin https://github.com/RaphaelNunes10/NAAP-back-end.git

* Make sure you have the last commit:

> git pull origin master

* Install Laravel:

> composer global require laravel/installer

> Configure the .env file (rename the .env.example file if it doesn't exists) like this:

> DB_CONNECTION=pgsql
> DB_HOST=127.0.0.1
> DB_PORT=5432
> DB_DATABASE= -your-database-name-
> DB_USERNAME= -your-database-username-
> DB_PASSWORD= -your-database-password-

* Install the project packages:

> composer update

* Run the project:

> php artisan serve

* The project will open as default at http://127.0.0.1:8000, you can manually type the endpoints on the URL for GET methods or access http://127.0.0.1:8000/docs to try them out with other methods available as well.

## Overview

The project does not attend all of the requirements proposed, but for someone who never worked with laravel before, it does have the basic CRUD and a really difficult query to get the highest sold items.

The endpoint documentation with more information can be found by firing up the project and accessing http://127.0.0.1:8000/docs.

<hr />

## Introdução

Esse projeto se destina à NAAP Solutions como teste prático, bem como um repositório de facil acesso para aprender sobre o básico de Laravel.

O projeto foi criado utilizando Visual Studio como IDE com Laravel para a criação de uma API onde é possível efetuar um CRUD e outras *queries* simples em uma base de dados PostgreSQL.

## Requerimentos

* [VSCode IDE](https://code.visualstudio.com/Download)
* [GIT](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* [PHP](https://www.php.net/downloads.php) OU [Wamp](https://www.wampserver.com/en/) e similares.

* Uma base de dados montada em PostgreSQL com as seguintes tabelas:

> produtos:
> * id int (ou serial)
> * nome varchar(256)
> * quantidade int
> * preco numeric
> * created_at timestamp
> * updated_at timestamp

> pedidos:
> * id int (ou serial)
> * total varchar(256)
> * data timestamp
> * created_at timestamp
> * updated_at timestamp

> pedido_items:
> * id int (ou serial)
> * produto_id int
> * pedido_id int
> * total numeric
> * quantidade int
> * created_at timestamp
> * updated_at timestamp

## Instalação

* Baixe e instale as ferramentas requeridas;

* Tenha certeza que você tem um banco de dados como citado a cima;

* Tenha certeza que estas *Dynamic Extensions* NÃO estão comentadas no arquivo de configuração php.ini (encontrado na pasta onde você instalou o PHP):

> * extension=curl
> * extension=fileinfo
> * extension=mbstring
> * extension=openssl
> * extension=pdo_pgsql
> * extension=pgsql

* No VSCode, abra uma nova pasta/crie um novo projeto;
* Abra o terminal (Terminal -> Novo Terminal);
* Inicialize a pasta como um novo repositório:

> git init

* Adcione este repositório:

> git remote add origin https://github.com/RaphaelNunes10/NAAP-back-end.git

* Puxe o último *commit*:

> git pull origin master

* Instale o Laravel:

> composer global require laravel/installer

> Configure o arquivo .env (renomeie o arquivo .env.example se não houver este arquivo) desta forma:

> DB_CONNECTION=pgsql
> DB_HOST=127.0.0.1
> DB_PORT=5432
> DB_DATABASE= -nome-do-seu-banco-de-dados-
> DB_USERNAME= -nome-de-usuário-do-seu-banco-de-dados-
> DB_PASSWORD= -senha-do-seu-banco-de-dados-

* Instale os pacotes do projeto:

> composer update

* Rode o projeto:

> php artisan serve

* O projeto abrirá por padrão em http://127.0.0.1:8000, você pode digitar os *endpoints* na URL para metodos GET ou acessar http://127.0.0.1:8000/docs para testar-los, podendo também testar os demais métodos.

## *Overview*

O projeto não tende todos os requerimentos passados, mas para alguém que nunca mexeu com Laravel antes, ele contém um CRUD básico com uma query bem dificil de montar que traz os produtos mais vendidos.

A documentação dos *endpoints* com mais informações pode ser encontrada ao rodar o projeto, acessando http://127.0.0.1:8000/docs.
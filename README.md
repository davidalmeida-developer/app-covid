# API COVID-19

## Introdução

Esta aplicação destina-se a consultar dados sobre COVID-19 no Brasil, Canadá e Austrália, e também comparar a taxa de mortes entre 2 países.

## Ambiente

Para rodar a aplicação é preciso instalar o servidor Apache, o PHP e um banco MySQL instalados em sua máquina;

Você pode instalar o [XAMPP](https://www.apachefriends.org/pt_br/download.html) que já contém todos eles.

Após a instalação, basta colar a pasta do projeto para "/opt/lampp/htdocs" no Linux ou "C:\xampp\htdocs\"
caso o SO seja Windows.

## Inicialização

Antes rodar acessar a página pelo endereço configurado no Apache (Provavelmente: "localhost:80/{pasta_do_projeto}"), o banco local deverá ser inicializado e preparado;

### Configurando o banco já instalado

Caso já tenha o MySQL instalado e rodando, basta criar a tabela que será ultilizada pela aplicação rodando a query contida no arquivo database/dump/create.sql deste projeto.

Depois, no arquivo db.php, configure os valores das variáveis host, username, password, dbname e dbport de acordo com o seu banco de dados.

### Configurando banco via Docker

Caso não tenha o MySQL instalado, você poderá rodar o banco de dados pelo docker (Você deverá ter o docker instalado). Neste projeto há um arquivo docker-compose.yml já configurado para rodar um container com MySQL. Inclusive, o arquivo db.php já se encontra configurado para acessar este banco.
A porta escolhida para bind foi a 3307, para que não haja conflitos caso a sua máquina já tenha o MySQL rodando na porta padrão 3306.

Comando para subir o banco(O terminal deve estar na pasta raiz no projeto):
    `docker-compose up -d mysql`

O container já inicializa com a tabela criada.

## Acessando a página

Após o banco estar funcionando basta acessar a página pelo endereço configurado no servidor Apache, normalmente a porta padrão é 80, logo o acesso será em "http://localhost:80/app-covid" 






# basic-email-laravel #

# Projeto Laravel com Envio de Emails e Configuração do Banco de Dados

Este projeto Laravel inclui a configuração de envio de emails usando o Mailtrap e a configuração de um banco de dados MySQL. Aqui estão os passos para configurar e executar o projeto.

## Comandos Artisan

### Criar um Mailable

O comando abaixo cria uma classe de email chamada `Contact`:
php artisan make:mail Contact

O comando abaixo cria um controlador chamado ContactController:
php artisan make:controller ContactController

No arquivo .env, adicione ou modifique as seguintes linhas:
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=4ee7145d5b892e
MAIL_PASSWORD=11ab22cc444da2
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

Este projeto utiliza um banco de dados MySQL. No arquivo .env, configure as seguintes variáveis:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel
DB_USERNAME=root
DB_PASSWORD=vip1234


Instruções para Configuração e Execução:

Clone o repositório:
git clone <URL_DO_REPOSITORIO>
cd <NOME_DO_DIRETORIO>

Instale as dependências:
composer install

Copie o arquivo .env.example para .env:
cp .env.example .env

Gere a chave da aplicação:
php artisan key:generate

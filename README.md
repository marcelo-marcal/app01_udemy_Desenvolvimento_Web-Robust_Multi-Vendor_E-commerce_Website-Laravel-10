<p align="center"><a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##  app01_udemy_Desenvolvimento_Web-Robust_Multi-Vendor_E-commerce_Website-Laravel-10
 Desenvolva um site robusto de comércio eletrônico para vários fornecedores usando Laravel 10, com instruções passo a passo abrangentes

instalar composer global:
`https://getcomposer.org/download/`


### Your First Laravel Project
site:
`https://laravel.com/docs/10.x/installation`
Windows Installer: Download and run `Composer-Setup.exe` - it will install the latest composer version whenever it is executed.

Entra na pasta raiz
O comando abaixo irá criar um projeto Laravel.
`composer create-project laravel/laravel example-app`

`composer create-project laravel/laravel commerce`

Adicionar o prejeto na pasta `src`.

Ver os comandos do Laravel:
`php artisan`

Rodar o servido:
`php artisan serve`

Caminho para onde está o arquivo da view do inicio, `welcome.blade.php`:
`resources > views > welcome.blade.php`

### Estrutura de Pastas (Projeto)
- app
- view
- model
- controller
- routing
- file store
- config
- database
  
### Comando para mostrar rotas:
  O route:listcomando pode ser usado para mostrar uma lista de todas as rotas cadastradas para a aplicação. Este comando exibirá o domínio, método, URI, nome, ação e middleware para as rotas incluídas na tabela gerada.
  `php artisan route:list`



### Laravel Breeze
  Laravel Breeze é uma implementação mínima e simples de todos os recursos de autenticação do Laravel , incluindo login, registro, redefinição de senha, verificação de e-mail e confirmação de senha. Além disso, o Breeze inclui uma página simples de “perfil” onde o usuário pode atualizar seu nome, endereço de e-mail e senha.

#### Instalação
Primeiro, você deve criar uma nova aplicação Laravel , configurar seu banco de dados e executar suas migrações de banco de dados . Depois de criar um novo aplicativo Laravel, você pode instalar o Laravel Breeze usando o Composer:

`composer require laravel/breeze --dev`

`php artisan breeze:install`

`composer require laravel/ui`

Antes de rodar as migrate, verifica a configuração do banco no arquivo `.env`.

`php artisan migrate`

`npm install`

`npm run dev`

`npm run watch`

Rodar o servido:
`php artisan serve`


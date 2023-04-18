## About Laravel

20230411
```sh
composer create-project laravel/laravel projeto

#inicia o servidor, usar o powershell
php artisan serve

#criar o controller
php artisan make:controller Estoque

#irá criar o arquivo em App\Http\Controllers

#migrations, para criar tabelas, no terminal
php artisan make::migration create_estoques_table 

#no terminal, rodar o comando
php artisan migrate

php artisan migrate:rollback //para retornar ao estado anterior, caso tenha dado algum erro
```
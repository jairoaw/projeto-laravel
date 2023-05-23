## Projeto Laravel

20230411
```sh
composer create-project laravel/laravel projeto

#inicia o servidor, usar o powershell
php artisan serve

#criar o controller
php artisan make:controller Estoque

#irá criar o arquivo em App\Http\Controllers

20230418
#migrations, para criar tabelas, no terminal
php artisan make::migration create_estoques_table 

#no terminal, rodar o comando
php artisan migrate

php artisan migrate:rollback //para retornar ao estado anterior, caso tenha dado algum erro

//cria o model Estoque (letra maiúscula e singular), para fazer as operações no banco
php artisan make:model Estoque 
```
#################################################################################################
### Aqui está a listagem das extensões que instalamos no VS Code durante o trabalho com o framework Laravel.

```sh
• PHP Intelephense (Ben Mewburn)
• Laravel Snippets (Winnie Lin)
• Laravel Blade (amirmarmul)
Configurando a extensão do Laravel Blade
• Na página da extensão Laravel Blade, copiar o código de User Setting (as opções JSON).
• Depois, pressionar Ctrl+Shift+P para abrir a janela de comandos do VS Code.
• Selecionar Preferences: Open Settings (JSON)
• Colar o código copiado do Laravel Blade.
```

#################################################################################################
### Rodando a aplicação Laravel depois de clonar

```sh
Quando buscamos a aplicação do Git, é preciso configurá-la para que rode corretamente. Estes são os passos: 
1. Clonar o repositório para a máquina local
• git clone <url_do_repositório> <nome_da_pasta>
2. Acessar pasta clonada
• cd <nome_da_pasta>
3. Rodar o instalador do composer, para puxar os arquivos complementares do Laravel
• composer install
4. Criar um arquivo chamado.env com base no .env.example
• cp .env.example .env
5. Gerar uma nova chave de aplicação
• php artisan key:generate
6. Abrir o arquivo .env no VS Code e alterar preferências, caso necessário (informações de acesso a banco, timezone, diretório de log etc.)
7. Se houver migrations, é possível rodá-las agora
• php artisan migrate
8. Tudo pronto. Se quiser começar a rodar a aplicação, basta serví-la
• php artisan serve
```

### Seeders

```sh
Roda a migration e o seed
php artisan migrate:fresh --seed
php artisan make:request EstoqueRequest

Adicionar pacote de linguagem pt-BR

php artisan lang:publish
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization

```
pendência: verificar.blade não preenche o formulario ao editar
resolvido: erro na variavel no controller que nao estava declarada

##################################################################################################
20230516
Criação do controller UserController
php artisan make:controller UserController

Criação das views para users
criação manual das views

Criação das rotas

Servidor de email mailhog
##################################################################################################
200230523
```sh
Upload de arquivos
iniciar a aplicação:
php artisan serve

criar a view em resources/views/upload/index.blade.php

criar a controller
php artisan make:controller UploadController
editar o controller em UploadController.php


conectar a rota em web.php

```	

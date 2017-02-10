<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

CRUD básico dos estados brasileiros. O cadastro deve conter as seguintes informações:

    Nome do Estado;
    Sigla;
    Histórico;

    Para complementar, você deve deixar esse cadastro em página privada 
    (necessário login e senha para ter acesso ao CRUD) 
    com um adicional de permissões simples seguindo a seguinte ideia:

    2 ou maus usuários, onde eu possa bloquear algumas funções para uns e liberar para outros;

	Para essa tarefa você deve usar as seguintes tecnologias:

    Framework Laravel;
    BD Mysql;
    Usar requisições AJAX para as ações do CRUD será um diferencial;

Instalação do sistema e dependencias

 git clone https://github.com/lucashenriqueteixeira/CRUD-estados.git
 
 composer update
 
 Instalação Do Banco de Dados e usuarios
 
 php artisan migrate
 
 php artisan make seeder:UsersTableSeeder
 
 
 Login: admin@email.com
 Senha: password
 
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- 
    1 - Create un nuovo progetto Laravel 10

    2 - tramite phpMyAdmin create un nuovo database laravel_model_controller

    3 - Importate nel vostro database la tabella movies in allegato

    4 - inserite le vostre credenziali per il database nel file .env

    5 - Create un model Movie
    php artisan make:model Movie

    6 - Create un controller che gestirà la rotta /
    php artisan make:controller Guest/PageController

    7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, 
    che quindi li visualizzerà a schermo, tramite delle card.

    BONUS:
    Stilare il layout nei dettagli con Sass
    -->
    <main>
        @yield('content')
    </main>
</body>

</html>

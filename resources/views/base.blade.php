<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="base">
    <header>
        <div class="flex">
            <div>
                <h1> <span>FITNESS <br> CENTER <i class="fa-solid fa-dumbbell"></i></span></h1>
            </div>
            <div><a href="{{ route('accueil.index') }}">Accueil</a></div>
            <div><a href="{{ route('cours.index') }}">Cours</a> </div>
            <div><a href="{{ route('tarifs.index') }}">Tarifs</a> </div>
            <div><a href="{{ route('contact.index') }}">Contact</a></div>
            <div><a href="{{ route('mentionslegales.index') }}">Mentions légales</a></div>
        </div>
    </header>
    @yield('content')
    <footer> 
        <div class="reseaux">
        <button>S'abonner</button>
            <div><a href="{{ route('mentionslegales.index') }}">Mentions légales </a></div>
            <div class="icons"> Page Twitter :<i class="fa-brands fa-twitter"></i></div>
            <div class="icons"> Page Instagram :<i class="fa-brands fa-square-instagram"></i></div>
            <div class="icons"> Page Facebook :<i class="fa-brands fa-facebook"></i></div>

        </div>
    </footer>
</div>
</body>

</html>

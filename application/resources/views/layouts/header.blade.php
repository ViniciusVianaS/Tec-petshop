<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <header class="p-2 w-full top-0 flex items-center justify-between bg-white">
        <div class="flex justify-center">
            <a href="/">
                <img class="h-14" src="/images/dog.png" alt="logo do dog">
            </a>
        </div>
        <nav class="ml-2 flex">
            <a class="ml-8 text-orange-500 font-bold rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="/">Home</a>
            <a class="ml-8 text-orange-500 font-bold rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="/actions/create">Cadastrar pet</a>
            <a class="ml-8 text-orange-500 font-bold rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="#">Ajustes</a>
        </nav>
        <div class="flex justify-center items-center mr-2">
            <a href="/login"
                class="text-white font-bold bg-orange-500 p-1 rounded hover:bg-orange-600 duration-300">Sign
                In</a>
            <div>
                <img src="/images/perfil.png" class="h-10 ml-5" alt="user">
            </div>
        </div>
    </header>

    @yield('content')
</body>

</html>

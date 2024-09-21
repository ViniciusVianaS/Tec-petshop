<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
            <a class="ml-8 text-orange-500 flex font-medium rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="/" title="Home">
                <span class="hidden md:flex">HOME</span>
                <i class="fa fa-home md:hidden flex" style="font-size: 22px;"></i>
            </a>
            <a class="ml-8 text-orange-500 flex font-medium rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="/actions/create" title="Cadastrar Pet">
                <span class="hidden md:flex">CADASTRAR PET</span>
                <i class="fa fa-plus md:hidden flex" style="font-size: 22px;"></i>
            </a>
            <a class="ml-8 text-orange-500 flex font-medium rounded-lg hover:bg-slate-200 hover:p-1 duration-300"
                href="/atendimento" title="Agendar Consulta">
                <span class="hidden md:flex">AGENDAR</span>
                <i class="fa fa-calendar md:hidden flex" style="font-size: 22px;"></i>
            </a>
        </nav>
        <div class="flex justify-center items-center mr-2">
            @guest
                <a href="/login" title="Login"
                    class="bg-orange-500 hover:bg-orange-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 p-1 rounded font-medium ml-3">
                    <span class="hidden md:flex">Login</span>
                </a>
                <a href="/register" title="Registrar"
                    class="bg-rose-500 hover:bg-rose-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 p-1 rounded font-medium ml-3">
                    <span class="hidden md:flex">Cadastrar-se</span>
                </a>
            @endguest
            @auth
                <a href="/dashboard" title="Meus Pets"
                    class="bg-orange-500 hover:bg-orange-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 p-1 rounded font-medium ml-3">
                    <span class="hidden md:flex">Meus pets</span>
                    <img class="h-8" src="/images/dog.png" alt="logo do dog">
                </a>
                <li class="list-none">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" title="Sair"
                            onclick="event.preventDefault();
                             this.closest('form').submit();"
                            class="bg-rose-500 hover:bg-rose-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 p-[7.7px] rounded font-medium ml-3">
                            <span>Sair</span>
                        </a>
                    </form>
                </li>
            @endauth
        </div>
    </header>

    @yield('content')
</body>

</html>

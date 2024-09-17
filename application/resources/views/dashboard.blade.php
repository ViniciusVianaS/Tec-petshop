@extends('layouts.header')

@section('title' . 'BEM VINDO')

@section('content')
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    @vite('resources/css/app.css')

    <body class="bg-slate-100">
        @if (count($pets) > 0)
            <h1 class="text-3xl font-medium ml-4 text-orange-500">Meus Pets</h1>
            @foreach ($pets as $pet)
                <main class="flex flex-col p-2">
                    <section class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:grid-cols-3">
                        <div
                            class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">
                            <img class="rounded-lg w-full h-64 object-cover duration-300" src="/img/pets/{{ $pet->image }}"
                                alt="{{ $pet->nome }}">
                            <p class="text-orange-500 text-2xl">{{ $pet->nome }}</p>
                            <p class="text-orange-500">{{ $pet->pet }}</p>
                        </div>
                    </section>
                </main>
            @endforeach
        @else
            <div class="flex justify-center items-center p-4">
                <p>
                    Você não tem pet cadastrado ainda. Cadastrar Pet?
                    <a href="/actions/create" class="text-orange-500 hover:text-orange-600 font-medium cursor-pointer">
                        Cadastrar pet
                    </a>
                </p>
            </div>
        @endif
    </body>
@endsection

@extends('layouts.header')

@section('title' . 'BEM VINDO')

@section('content')
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    @vite('resources/css/app.css')

    <body class="bg-slate-200">
        @if (count($pets) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($pets as $pet)
                    <p>{{ $pet->nome }}</p>
                    <p>{{ $pet->pet }}</p>
                @endforeach
            </div>
            </div>
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

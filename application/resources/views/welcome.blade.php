@extends('layouts.header')

@section('title' . 'BEM VINDO')

@section('content')
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <main class="bg-slate-200 flex flex-col p-5">
        <h1 class="text-3xl font-medium">Está procurando atendimento para seu pet?</h1>
        <section class="grid grid-cols-1 gap-4 mt-5 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">

            </div>
            <div
                class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">

            </div>
            <div
                class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">

            </div>
        </section>
        <section class="mt-6">
            <h1 class="text-2xl font-medium">Veja os profissionais disponiveis para atender seu pet</h1>
            <div class="mt-6">
                <p>Dr Manoel da Silva - Disponivel</p>
            </div>
            <div class="mt-6">
                <p>Dr Manoel da Silva - Disponivel</p>
            </div>
            <div class="mt-6">
                <p>Dr Manoel da Silva - Disponivel</p>
            </div>
            <div class="mt-6">
                <p>Dr Manoel da Silva - Disponivel</p>
            </div>
        </section>
    </main>

@endsection

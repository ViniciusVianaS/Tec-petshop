@extends('layouts.header')

@section('title' . 'BEM VINDO')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png" />
    @vite('resources/css/app.css')

    <body class="bg-slate-100">
        <main class="flex flex-col p-5">
            <h1 class="text-3xl font-medium text-orange-500">Está procurando atendimento para seu pet?</h1>
            <section class="grid grid-cols-1 gap-4 mt-5 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">
                    <img class="rounded-lg w-full h-64 object-cover duration-300" src="/images/image1.jpg" alt="IA image">
                    <p class="text-orange-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut
                        provident, beatae quia
                        perferendis.</p>
                </div>
                </div>
                <div
                    class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">
                    <img class="rounded-lg w-full h-64 object-cover duration-300" src="/images/image2.jpg" alt="IA image">
                    <p class="text-orange-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut
                        provident, beatae quia
                        perferendis.</p>
                </div>
                <div
                    class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">
                    <img class="rounded-lg w-full h-64 object-cover duration-300" src="/images/image3.jpg" alt="IA image">
                    <p class="text-orange-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut
                        provident, beatae quia
                        perferendis.</p>
                </div>
            </section>
            <section class="mt-6">
                <h1 class="text-2xl font-medium text-orange-500">Veja os profissionais disponiveis para atender seu pet</h1>
                @foreach ($medicos as $medico)
                    <div class="mt-6 p-2 rounded bg-white w-[300px]">
                        <a class="font-semibold" href="#">Doutor {{$medico->name}} - Disponivel</a>
                    </div>
                @endforeach
            </section>
        </main>
    </body>
@endsection

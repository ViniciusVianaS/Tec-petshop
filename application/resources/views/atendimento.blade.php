@extends('layouts.header')

@section('title' . 'CADASTRAR')

@section('content')

    <body class="bg-slate-100">
        <main class="flex flex-col justify-center items-center p-5">
            <h1 class="text-4xl font-medium text-orange-500">Selecione o médico</h1>
            <form action="/atendimento" method="POST" class="mt-6 w-[300px]">
                @csrf
                <div class="mt-2">
                    <label for="pet_id" class="block text-gray-700 font-bold mb-2">Selecione seu pet</label>
                    <select
                        class="block w-full text-gray-700 border-none rounded p-2 leading-tight focus:outline-none focus:bg-slate-100 focus:border-blue-500"
                        name="medico_id" id="medico" required>
                        @foreach ($medicos as $medico)
                            <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <label for="medico_id" class="block text-gray-700 font-bold mb-2">Selecione o médico</label>
                    <select
                        class="block w-full text-gray-700 border-none rounded p-2 leading-tight focus:outline-none focus:bg-slate-100 focus:border-blue-500"
                        name="pet_id" id="pet" required>
                        @foreach ($pets as $pet)
                            <option value="{{ $pet->id }}">{{ $pet->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 font-bold mb-2" for="data_consulta">Data do Atendimento:</label>
                    <input
                        class="block w-full text-gray-700 border-none rounded p-2 leading-tight focus:outline-none focus:bg-slate-100 focus:border-blue-500"
                        type="date" name="data_consulta" id="data_consulta" required>
                </div>
                <button type="submit"
                    class="bg-orange-500 p-1 w-full rounded mt-4 text-white font-bold hover:bg-orange-600 duration-300">Enviar</button>
            </form>
        </main>
    </body>
@endsection

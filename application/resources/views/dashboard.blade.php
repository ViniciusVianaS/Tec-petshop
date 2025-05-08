@extends('layouts.header')

@section('title' . 'BEM VINDO')

@section('content')
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png">
    @vite('resources/css/app.css')

    <body class="bg-slate-100">
        @if (count($pets) > 0)
            <h1 class="text-3xl font-medium ml-4 text-black">Meus Pets</h1>
            <main class="flex p-2 w-full">
                <section class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 w-full">
                    @foreach ($pets as $pet)
                        <div
                            class="bg-white p-3 rounded-lg min-h-[200px] flex flex-col relative transition-shadow duration-300 ease-in-out cursor-pointer hover:shadow-lg">
                            <img class="rounded-lg w-full h-64 object-cover duration-300" src="/img/pets/{{ $pet->image }}"
                                alt="{{ $pet->nome }}">
                            <p class="text-orange-500 text-2xl mt-2">{{ $pet->nome }}</p>
                            <p class="text-orange-500">{{ $pet->pet }}</p>
                            <div class="flex mt-2">
                                <button
                                    onclick="openEditModal({{ $pet->id }}, '{{ $pet->nome }}', '{{ $pet->pet }}')"
                                    class="bg-blue-500 text-white p-1 rounded">
                                    Editar
                                </button>
                                <form action="/pets/{{ $pet->id }}" method="POST" class="ml-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 p-1 text-white rounded">Deletar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </section>
            </main>
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
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white p-6 rounded shadow-lg w-[350px]">
            <h2 class="text-xl font-semibold mb-4 text-orange-500">Editar Pet</h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" id="editPetId" name="id">

                <div>
                    <label for="editImage" class="block text-gray-700 font-bold mb-2">Nova imagem do pet</label>
                    <input type="file" id="editImage" name="image" class="block w-full text-gray-700">
                </div>

                <div class="mt-2">
                    <label for="editNome" class="block text-gray-700 font-bold mb-2">Nome</label>
                    <input type="text" id="editNome" name="nome"
                        class="block w-full text-gray-700 border rounded p-1 outline-none" required>
                </div>

                <div class="mt-2">
                    <label for="editTipo" class="block text-gray-700 font-bold mb-2">Tipo</label>
                    <input type="text" id="editTipo" name="pet"
                        class="block w-full text-gray-700 border rounded p-1" required>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="button" onclick="closeModal()"
                        class="bg-gray-500 text-white px-4 py-2 mr-2 rounded hover:bg-gray-600">Cancelar</button>
                    <button type="submit"
                        class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function openEditModal(id, nome, tipo) {
            document.getElementById('editPetId').value = id;
            document.getElementById('editNome').value = nome;
            document.getElementById('editTipo').value = tipo;

            const form = document.getElementById('editForm');
            form.action = `/pets/${id}`;

            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
            document.getElementById('editModal').classList.remove('flex');
        }
    </script>

@endsection

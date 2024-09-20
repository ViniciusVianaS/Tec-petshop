@extends('layouts.header')

@section('title' . 'CADASTRAR')

@section('content')

    <body class="bg-slate-100">
        <main class="flex flex-col justify-center items-center p-5">
            <h1 class="text-4xl font-medium text-orange-500">Cadastre seu pet</h1>
            <form action="/pets" method="POST" enctype="multipart/form-data" class="mt-6 w-[300px]">
                @csrf
                <div>
                    <label for="image" class="block text-gray-700 font-bold mb-2">Imagem do seu pet</label>
                    <img id="previewImage" src="https://via.placeholder.com/150" alt="imagem de seleção"
                        class="w-32 h-32 object-cover cursor-pointer mx-auto">
                    <input type="file" id="imageInput" name="image" class="hidden" accept="image/*">
                </div>
                <div class="mt-2">
                    <label for="nome" class="block text-gray-700 font-bold mb-2">Nome do seu pet</label>
                    <input type="text"
                        class="block w-full text-gray-700 border-none rounded p-1 leading-tight focus:outline-none focus:bg-slate-100 focus:border-blue-500"
                        id="nome" name="nome" placeholder="Ex: Thor" required>
                </div>
                <div class="mt-2">
                    <label for="pet" class="block text-gray-700 font-bold mb-2">Qual é seu pet</label>
                    <input type="text"
                        class="block w-full text-gray-700 border-none rounded p-1 leading-tight focus:outline-none focus:bg-slate-100 focus:border-blue-500"
                        id="pet" name="pet" placeholder="Ex: Cachorro" required>
                </div>
                <button type="submit"
                    class="bg-orange-500 p-1 w-full rounded mt-4 text-white font-bold hover:bg-orange-600 duration-300">Enviar</button>
            </form>
        </main>
        <script>
            const previewImage = document.getElementById('previewImage');
            const imageInput = document.getElementById('imageInput');

            previewImage.addEventListener('click', () => {
                imageInput.click();
            });

            imageInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        previewImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </body>
@endsection

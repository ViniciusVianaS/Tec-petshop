<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png" />
    @vite('resources/css/app.css')
    <title>MEDICO - REGISTER</title>
</head>

<body class="bg-slate-100">
    <div class="flex flex-col justify-center items-center h-[90vh]">
        <img src="/images/dog.png" alt="doguinho" class="h-40">
        <form method="POST" action="{{ route('medico.register.submit') }}"
            class="flex flex-col mt-2 rounded-lg shadow-lg justify-center items-center bg-white w-[400px] h-[350px]">
            @csrf
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="name">Nome</label>
                <input
                    class="block w-full text-gray-700 border border-gray-400 rounded leading-tight focus:outline-none focus:border-violet-500"
                    type="text" name="name" id="name" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input
                    class="block w-full text-gray-700 border border-gray-400 rounded leading-tight focus:outline-none focus:border-violet-500"
                    type="email" name="email" id="email" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">Senha</label>
                <input
                    class="block w-full text-gray-700 border border-gray-400 rounded leading-tight focus:outline-none focus:border-violet-500"
                    type="password" name="password" id="password" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">Confirme a Senha</label>
                <input
                    class="block w-full text-gray-700 border border-gray-400 rounded leading-tight focus:outline-none focus:border-violet-500"
                    type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button class="bg-slate-900 p-2 text-white font-semibold mt-3 rounded-lg" type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>

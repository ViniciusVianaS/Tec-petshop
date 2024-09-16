
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('dog.png') }}" type="image/png" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
    <body class="bg-slate-200">
        <form method="POST" action="{{ route('medico.login') }}">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>

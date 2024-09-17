@extends('medico.header')

@section('content')
    <body class="bg-slate-100">
        <div class="flex flex-col justify-center items-center mt-6">
            <h1>Bem-vindo, Dr. {{ Auth::guard('medico')->user()->name }}</h1>
            <p>Aqui está o seu painel de controle de médico.</p>
        </div>
    </body>
@endsection

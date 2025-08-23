<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio del sitio</title>
</head>
<body>
    @extends('layouts.app')

    @section('sidebar')
    @parent()
        <p>Esto añade una barra lateral</p>

        <p>bienvenido al sitio, {{$nombre}}</p>
    @endsection

    @section('content')

    <p>Este contenido se mostrará en la pagina principal</p>

    @if ($edad >= 18)
        <p>eres mayor de edad</p>
    @else()
        <p>eres menor de edad</p>
    @endif

    <h2>Lista de frutas preferidas</h2>
    <ul>
        @foreach ($frutas as $fruta)
            <li>{{$fruta}}</li>
        @endforeach
    </ul>
    @endsection
</body>
</html>

@extends('layouts/tareas')

@section('content')
    mensaje que se muestra en la pagina
    <div class="container w-50 border p-4 mt-4">

        <form action="{{route('tareas-editar', ['id' => $tarea->id])}}" method="POST">
            @method('PATCH')
            <!-- esto te protege contra los ataques CSRF AL INCLUIRLO EN LOS FORMULARIOS
            verifica si la solicitud es del sitio web y no de tercer-->
            @csrf
            <!-- aqui mostrara si ha funcionado o ha habido algun error-->
            @if (session('success'))
                <h5 class="alert alert-success" role="alert">{{session('success')}}</h5>
            @endif

            @error('title')
                <h5 class="alert alert-danger" role="alert">{{$message}}</h5>
            @enderror


            <div class="mb-3">
                <label for="title" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" name="title" value="{{$tarea->title}}">
            </div>
            <button type="submit" class="btn btn-primary">actualizar tablas</button>
        </form>


    </div>
@endsection

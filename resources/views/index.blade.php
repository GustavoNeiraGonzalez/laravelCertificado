@extends('layouts/tareas')

@section('content')
    mensaje que se muestra en la pagina
    <div class="container w-50 border p-4 mt-4">

        <form action="{{route('tareas')}}" method="POST">
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
                <input type="text" class="form-control" name="title">
                <div id="emailHelp" class="form-text">aqui se crearan nuevas tareas</div>
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>

        <ul class="list-group">
            @foreach ($tareas as $tarea)
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <a href="{{route('tareas-editar', ['id' => $tarea->id])}}">{{$tarea->title}}</a>
                    <div>
                        <button type="submit" class="btn-danger btn-sm rounded-pill"
                        Style= "color:inherit; text-decoration:none "
                        >eliminar</button>
                    </div>
                </li>

            @endforeach

        </ul>
    </div>
@endsection

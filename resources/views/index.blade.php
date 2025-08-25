@extends('layouts/tareas')

@section('content')
    mensaje que se muestra en la pagina
    <div class="container w-25 border p-4 mt-4">

        <form action="{{route('tareas')}}" method="POST">
            <!-- esto te protege contra los ataques CSRF AL INCLUIRLO EN LOS FORMULARIOS
            verifica si la solicitud es del sitio web y no de terceros-->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nombre de la tarea</label>
                <input type="text" class="form-control" name="title">
                <div id="emailHelp" class="form-text">aqui se crearan nuevas tareas</div>
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>
    </div>
@endsection

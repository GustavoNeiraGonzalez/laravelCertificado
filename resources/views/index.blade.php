@extends('layouts/tareas')

@section('content')
    mensaje que se muestra en la pagina
    <div class="container w-25 border p-4 mt-4">

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la tarea</label>
            <input type="text" class="form-control" name="title">
            <div id="emailHelp" class="form-text">aqui se crearan nuevas tareas</div>
        </div>

        <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
    </form>
    </div>
@endsection

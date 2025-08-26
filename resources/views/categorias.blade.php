@extends('layouts/tareas')

@section('content')
    <div class="container w-50 border p-4 mt-4">

        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmWru8q17zpOzzzT1s475ZS_8fOL1GS0teSw&s" class="card-img-top" alt="imagen programadores">
            <div class="card-body">
                <h5 class="card-title">Error</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <p class="card-text">No se ha solicitado esta pagina</p>
                    </li>
                </ul>
                <a href="{{route('tareas')}}" class="btn btn-primary">Ir a tareas</a>
            </div>
        </div>
    </div>
@endsection

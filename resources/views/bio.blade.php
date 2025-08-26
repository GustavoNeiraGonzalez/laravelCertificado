@extends('layouts/tareas')

@section('content')
    <div class="container w-50 border p-4 mt-4">

        <div class="card" style="width: 18rem;">
            <img src="https://www.jovenesprogramadores.cl/wp-content/uploads/2020/07/JP_LOGO_barragob-300x158.png" class="card-img-top" alt="imagen programadores">
            <div class="card-body">
                <h5 class="card-title">Gustavo neira</h5>
                <p class="card-text">Programador Junior .</p>
                <p class="card-text">Soy un programador con preferencia por el desarrollo back end, además, poseo diferentes proyectos usando distintos lenguajes.</p>
                <h5 class="card-title">Lenguajes y frameworks</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <p class="card-text">Javascript ReactJS.</p>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <p class="card-text">PHP Laravel.</p>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <p class="card-text">Python DJango.</p>
                    </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <p class="card-text">MySQL y MongoDB.</p>
                    </li>
                </ul>
                <a href="https://github.com/GustavoNeiraGonzalez" class="btn btn-primary">Mira mi perfil en github</a>
            </div>
        </div>
    </div>
@endsection

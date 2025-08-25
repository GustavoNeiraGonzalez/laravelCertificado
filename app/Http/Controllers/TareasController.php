<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class TareasController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            "title"=>"required|min:4"
        ]);
        $tarea = new Tarea;
        $tarea->title = $request->title;
        $tarea->save();

        return redirect()
        ->route('tareas')
        ->with('success','La tarea ha sido creada exitosamente');
    }

    public function index(){
        $tareas = Tarea::all();
        return view('index',['tareas'=>$tareas]);
    }
}

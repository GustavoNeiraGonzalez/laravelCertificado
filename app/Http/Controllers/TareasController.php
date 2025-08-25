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
    public function update(Request $request,$id){
        $tarea = Tarea::find($id);/*aqui utilidad del :: es que buscas el objeto con una id unica a diferencia del store donde estas creando con new Tarea*/
        $tarea->title = $request->title;
        $tarea->save();

        return redirect()
        ->route('tareas')
        ->with('success','La tarea ha sido actualizada');
    }
    public function show($id){
        $tarea = Tarea::find($id);/*con este show simplemente mostraremos el id si es que existe un id relacionada a la que buscamos*/
        return view('show',['tarea'=>$tarea]);
    }

    public function index(){
        $tareas = Tarea::all();
        return view('index',['tareas'=>$tareas]);
    }

    public function destroy($id){
        $tarea = Tarea::find($id);
        $tarea->delete();
        return redirect()
        ->route('tareas')
        ->with('success','La tarea ha sido eliminada');
    }
}

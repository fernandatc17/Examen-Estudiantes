<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucion;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all() ; //SELECT * FROM estudiantes 
        //Enviamos la varible $estudiantes a la vista  index.blade.php
        return view('estudiantes/index',compact('estudiantes'));
        // echo "desde index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instituciones = Institucion::all(); //SELECT * FROM inst
        //Enviamos la varible $insts a la vista  create.blade.php
        return view('estudiantes/create', compact('instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante;
        //Asignamos al campo usuario_id 
        $estudiante->institucion_id= $request->institucion ; //obtendremos el valor de la caja con name institucion
        $estudiante->nombre= $request->nombre ;
        $estudiante->apellido= $request->apellido;
        $estudiante->email= $request->email;
        $estudiante->edad= $request->edad;

        $estudiante->save();
        return redirect('/estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instituciones = Institucion::all();
        $estudiante= Estudiante::find($id);// SELECT * FROM album WHERE id=$id
        // dd($album);//Muestra el detalle de album a la vista albums/edit
        // Enviamos las variables $album y $users a la vista edit.blade.php
        return view('estudiantes/edit', compact('estudiante','instituciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        

        $estudiante = Estudiante::find($request->id);
        //Asignamos al campo usuario_id 
        $estudiante->institucion_id= $request->institucion ; //obtendremos el valor de la caja con name institucion
        $estudiante->nombre= $request->nombre ;
        $estudiante->apellido= $request->apellido;
        $estudiante->email= $request->email;
        $estudiante->edad= $request->edad;

        $estudiante->save();
        return redirect('/estudiantes');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $estudiante = Estudiante::find($id);
            $estudiante->delete();
            return redirect('/estudiantes');
        } catch(\Throwable $th){
            return redirect('/estudiantes')->with('error', 'No se puedo eliminar el registro');
        }
    }
}

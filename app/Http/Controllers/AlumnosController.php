<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;


class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$alumnos=Alumno::get();
        //$alumnos=Alumno::orderBy('nombre','asc')->paginate(2);
        $alumnos=Alumno::latest()->paginate(2);

        return view('alumnos',compact('alumnos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /* //No funcionaría con este ultimo ajuste
    public function store(CreateAlumnoRequest $request)*/
    public function store(Request $request)
    {
        $camposv=request()->validate([
            'nombre'=>'required',
            'curso'=>'required',
            'nota1'=>'required',
            'nota2'=>'required'
        ]);
        Alumno::create($camposv);
        
        /* //No funcionaría con este ultimo ajuste         
        Alumno::create($request->validate());*/
        
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //return Alumno::find($id);
        return view('show',[
            'alumno'=>Alumno::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;

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
    public function store(Request $request)
    {
        /*
        $nombre=request('nombre');
        $curso=request('curso');
        $nota1=request('nota1');
        $nota2=request('nota2');
        
        Alumno::create([
            'nombre'=>$nombre,
            'curso'=>$curso,
            'nota1'=>$nota1,
            'nota2'=>$nota2
        ]);
        */
        //Alumno::create(request()->all());
        $camposv=request()->validate([
            'nombre'=>'required',
            'curso'=>'required',
            'nota1'=>'required',
            'nota2'=>'required'
        ]);
        Alumno::create($camposv);

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

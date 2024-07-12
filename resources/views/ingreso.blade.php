@extends('layout')

@section('title','Ingreso')

@section('content')
    <h2>Ingreso</h2>

    <table cellpadding="3" cellspaceing="5" class="alumnos">

        <tr>
            <th colspan="3">Crear nuevo alumno</th>
        </tr>

        <!--@if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif-->

        <form action="{{route('alumnos.store')}}" method="post">
            @csrf

            <tr>
                <th>Nombre: </th>
                <td> 
                    <input type="text" name="nombre" >
                    <br>{{$errors->first('nombre')}}
                </td>
            </tr>

            <tr>
                <th>Curso: </th>
                <td> 
                    <input type="text" name="curso" >
                    <br>{{$errors->first('curso')}}
                </td>
            </tr>

            <tr>
                <th>Nota 1: </th>
                <td> 
                    <input type="number" id="nota1" name="nota1" min="0" max="20" >
                    <br>{{$errors->first('nota1')}}
                </td>
            </tr>

            <tr>
                <th>Nota 2: </th>
                <td> 
                    <input type="number" id="nota2" name="nota2" min="0" max="20" >
                    <br>{{$errors->first('nota2')}}
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center"> 
                    <button>
                        Guardar
                    </button>
                </td>
            </tr>
        </form>
    </table>

@endsection
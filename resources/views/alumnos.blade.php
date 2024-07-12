@extends('layout')

@section('title','Listado')

@section('content')
    <h2>Listado</h2>
    <tr>
        @if($alumnos)
            @foreach($alumnos as $alumno)
                <td class="alumnos" colspan="2"><a href="{{route('alumnos.show',$alumno)}}">{{$alumno->nombre}}</a></td>
            @endforeach
        @else
            <td colspan="3">No existe ningun alumno en el listado para mostrar</td>
        @endif
    </tr>
    <tr>
        <td colspan="3">{{$alumnos->links('pagination::bootstrap-4')}}</td>
    </tr>
    <tr>
        <td colspan="3" class="alumnos">
            <a href="{{route('ingreso')}}">Crear Nuevo Alumno</a>
        </td>
    </tr>

@endsection
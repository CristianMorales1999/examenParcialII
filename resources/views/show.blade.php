@extends('layout')

@section('title','Alumno | '.$alumno->nombre)


@section('content')
<tr>
    <td colspan="3" class="alumnos" ><b>ALUMNO {{$alumno->id}}</b></td> <br>
</tr>
<tr>
    <td colspan="3"><b>Nombre:</b> {{$alumno->nombre}}</td>
</tr>
<tr>
    <td colspan="3"><b>Curso:</b> {{$alumno->curso}}</td>
</tr>
<tr>
    <td colspan="3"><b>Nota 01:</b> {{$alumno->nota1}}</td>
</tr>
<tr>
    <td colspan="3"><b>Nota 02:</b> {{$alumno->nota2}}</td>
</tr>
<tr>
    <td colspan="3"><b>Promedio:</b> {{($alumno->nota1+$alumno->nota2)/2}}</td>
</tr>
<tr>
    <td colspan="3"><b>Condición:</b> {{
        ($alumno->nota1 + $alumno->nota2) / 2 >= 11 ? 'Aprobado' : 'Desaprobado'
    }}</td>
</tr>
<tr>
    <td colspan="3"><b>Fecha de Registro:</b> {{$alumno->created_at->format('Y-m-d')}}</td>
</tr>
<tr>
    <td colspan="3" align="center">{{$alumno->created_at->diffForHumans()}}</td>
</tr>
@endsection
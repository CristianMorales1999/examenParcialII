
<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home')}}"><a href="{{ route('home') }}">Home</a></th>

        <th scope="col" class="{{ setActivo('ingreso')}}"><a href="{{ route('ingreso') }}">Ingreso</a></th>
        
        <th scope="col" class="{{ setActivo('alumnos.index') }} {{ setActivo('alumnos.show') }}"><a href="{{ route('alumnos.index') }}">Listado</a></th>
    </tr>
    <tr>
        <td colspan="3">
            <!-- Agregamos la directiva para agregar contenido dinamico-->
            @yield('content')
        </td>
    </tr>
</thead>

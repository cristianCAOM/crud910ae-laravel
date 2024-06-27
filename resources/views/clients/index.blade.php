@extends('layout.main_template')
@section('content')
    <h2>Pagina Cliente</h2>
    <br>
    <button><a href="{{route('clients.create')}}">Registrar Cliente</a></button>
    <br>



    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Comunidad</th>
        </thead>
        <br>
        <tbody>
            @foreach ($clients as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->s_lastname}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->state}}</td>
                <td>{{$c->town}}</td>



                 <td>
                    <button> <a href="{{route('clients.show', $c)}}">Mostrar</a></button>
                    <button> <a href="{{route('clients.edit', $c)}}">Editar</a></button>
                    <form action="{{route('clients.destroy', $c)}}" method="POST">
                     @method("DELETE")
                     @csrf
                     <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

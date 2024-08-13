@extends('layout.main_template')
@section('content')


    <h2>Pagina Cliente</h2>
    <br>
{{--     <button type="button" class="btn btn-success" href="{{route('clients.create')}}"> Registrar Cliente</button>
 --}}    <a class="btn btn-success"  href="{{route('clients.create')}}">Registrar Cliente</a></button>
    <br>



    <table class="table table-striped table-hover">
        <thead>
            <th>ID Cliente</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Comunidad</th>
            <th>Más Detalles</th>
            <th>Mostrar</th>
            <th>Eliminar</th>
        </thead>
        <br>
        <tbody>
            @foreach ($clients as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->s_lastname}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->state}}</td>
                <td>{{$c->town}}</td>

                <td>
                    <a href="{{route('clients.show', $c)}}" class="btn btn-info">Mostrar</a></button>
                </td>
                <td>
                    <a href="{{route('clients.edit', $c)}}" class="btn btn-warning">Editar</a></>
                </td>
                <td>
                    <form action="{{route('clients.destroy', $c)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                       </form>

                </td>





            @endforeach
        </tbody>
    </table>
@endsection

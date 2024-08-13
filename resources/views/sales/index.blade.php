@extends('layout.main_template')
@section('content')

<h2>Pagina Producto</h2>
    <br>
    {{-- <button type="button" class="btn btn-success" href="{{route('products.create')}}"> RP</button> --}}
    <a href="{{route('sales.create')}}" class="btn btn-success">Registrar Venta</a></button>
    <br>

<table  class="table table-striped table-hover">
    <thead>
        <th>ID_Cliente</th>
        <th>ID_Producto</th>
        <th>Más Detalles</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <br>

    <tbody>
        @foreach ($sales as $s)
        <tr>
            <td>{{ $s->id_client }}</td>
            <td>{{ $s->id_product }}</td>
            <td>
                <a href="{{ route('sales.show', $s) }}" class="btn btn-info">Mostrar</a>
            </td>
            <td>
                <a href="{{ route('sales.edit', $s) }}" class="btn btn-warning">Editar</a>
            </td>
            <td>
                <form action="{{ route('sales.destroy', $s) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
        @endsection

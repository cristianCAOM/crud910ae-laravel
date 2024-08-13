@extends('layout.main_template')
@section('content')

    <h2>Pagina Producto</h2>
    <br>
    {{-- <button type="button" class="btn btn-success" href="{{route('products.create')}}"> RP</button> --}}
    <a href="{{route('products.create')}}" class="btn btn-success">Registrar Producto</a></button>
    <br>



    <table  class="table table-striped table-hover">
        <thead>
            <th>ID Producto</th>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Marca</th>
            <th>Imagen</th>
            <th>Más Detalles</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
        <br>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td>{{$p->brand->brand}}</td>
                <td><img src="/image/products/{{$p->image}}" width="60" alt="Dulces.jpeg"></td>


                    <td>
                        <a href="{{route('products.show', $p)}}"class="btn btn-info">Mostrar</a></button>
                    </td>
                    <td>
                        <a href="{{route('products.edit', $p)}}" class="btn btn-warning">Editar</a></>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                           </form>

                    </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection

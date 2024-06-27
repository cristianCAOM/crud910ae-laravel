@extends('layout.main_template')
@section('content')

    <h2>Pagina Producto</h2>
    <br>
    <button class="btn btn-success"><a href="{{route('products.create')}}">Registrar Producto</a></button>
    <br>



    <table  class="table table-striped table-hover">
        <thead>
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
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td>{{$p->brand->brand}}</td>
                <td><img src="/image/products/{{$p->image}}" width="60" alt="Dulces.jpeg"></td>


                    <td>
                        <button type="button" class="btn btn-outline-info"> <a href="{{route('products.show', $p)}}">Mostrar</a></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-dark"><a href="{{route('products.edit', $p)}}">Editar</a></button>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                           </form>

                    </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection

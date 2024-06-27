@extends('layout.main_template')
@section('content')

<style>
    *{box-sizing: border-box}

    form{
        width: 300px;
        padding-inline: 20px ;
        padding-block:20px ;
        border-radius:12px;
        margin-block: Auto;
        margin-inline: Auto;
        background-color: rgb(163, 224, 124);
    }

    form label{
        width: 140px;
        height: 10px;
        font-weight: bold;
        font-family: 'Courier New', Courier, monospace;
        display: inline-block;
    }

    form button{
        width: 100%;
        padding: 8px 12px;
        margin-block-start: 30px;
        border-radius: 3px;
        border: 2px solid rgb(255, 255, 255);
        display: block;
        color: rgb(255, 255, 255);
        font-weight: bold;
        background-color:white;
    }
</style>
    <h2>Actualizar Producto:{{$product->nameProduct}}</h2>
    <br>
    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        	<label for="">Producto</label>
            <input type="text" name="nameProduct" value="{{$product->nameProduct}}">
            <label for="">Cantidad</label>
            <input type="number" name="stock" value="{{$product->stock}}">
            <label for="">Precio Unitario</label>
            <input type="number" name="unit_price" value="{{$product->unit_price}}">
            <label for="">Marcas</label>
            <br>
            <select name="id_brand" id="">
                <option value="">Selecionar...</option>
                @foreach ($brands as $brand => $id)
                {{-- <option value="{{$id}}">{{$brand}}</option> --}}
                <option {{$product->id_brand == $id ? 'selected':'' }} value="{{$id}}">{{$brand}}</option>
                @endforeach
            </select>
            <br>
            <label for="">Imagen</label>
            <input type="file" name="image">

    <button type="submit">Actualizar</button>
    </form>
@endsection

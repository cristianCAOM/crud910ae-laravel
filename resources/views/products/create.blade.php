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
        background-color: goldenrod;
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
        border: 2px solid black;
        display: block;
        color: rgb(8, 8, 8);
        font-weight: bold;
        background-color:
    }
</style>
    <h2>Registrar Producto</h2>
    <br>
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif
<br>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        	<label for="">Producto</label>
            <input type="text" name="nameProduct" required>
            <label for="">Cantidad</label>
            <input type="number" name="stock" required>
            <label for="">Precio Unitario</label>
            <input type="text" name="unit_price" required>
            <label for="">Marcas</label>
            <br>
            <select name="id_brand" id="">
                <option value="">Selecionar...</option>
                @foreach ($brands as $brand => $id)
                <option value="{{$id}}">{{$brand}}</option>
            <br>

                @endforeach
            </select>
    <button type="submit">Registrar</button>
    </form>
@endsection

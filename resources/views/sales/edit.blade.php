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
    <h2>Actualizar Venta</h2>
    <br>
    <form action="{{route('sales.update', $sale->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        	<label for="">ID_Cliente</label>
            <input type="text" name="id_client" value="{{$sale->id_client}}">
            <label for="">ID_Producto</label>
            <input type="number" name="id_product" value="{{$sale->id_product}}">


    <button type="submit" class="btn btn-primary">Actualizar Venta</button>
    </form>
@endsection

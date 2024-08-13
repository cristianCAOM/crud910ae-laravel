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
        background-color:white;
    }
</style>
    <h2>Registrar Venta</h2>
    <br>
    <form action="{{route('sales.store')}}" method="POST">
        @csrf
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf
            <input type="text" name="id_client" placeholder="ID Cliente">
            <input type="text" name="id_product" placeholder="ID Producto">
            <!-- Otros campos -->
            <button type="submit">Registrar Venta</button>
        </form>
    </form>
@endsection

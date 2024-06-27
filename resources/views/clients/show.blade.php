@extends('layout.main_template')
@section('content')
    <h2>Nombre del Cliente:{{$client->name}}</h2>
    <br>
    <h3>Apellido Paterno:{{$client->last_name}}</h3>
    <h3>Apellido Materno: {{$client->s_lastname}}</h3>
    <h3>Email: {{$client->email}}</h3>
    <h3>Telefono:{{$client->phone}}</h3>
    <h3>Estado: {{$client->state}}</h3>
    <h3>Municipio: {{$client->town}}</h3>

    @endsection

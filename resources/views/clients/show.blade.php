@extends('layout.main_template')
@section('content')

<table  class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del Cliente</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Estado</th>
        <th scope="col">Municipio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>{{$client->name}}</td>
        <td>{{$client->last_name}}</td>
        <td>{{$client->s_lastname}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->state}}</td>
        <td>{{$client->town}}</td>

      </tr>

    @endsection

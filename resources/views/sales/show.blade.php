@extends('layout.main_template')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID_Cliente</th>
      <th scope="col">ID_Producto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{$sale->id_client}}</td>
      <td>{{$sale->id_product}}</td>
    </tr>

    @endsection

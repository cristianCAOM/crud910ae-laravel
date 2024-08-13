@extends('layout.main_template')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{$product->stock}}</td>
      <td>{{$product->unit_price}}</td>
      <td><img src="/image/products/{{$product->image}}" width="300" alt="Dulces.jpeg"></td>
    </tr>

    @endsection

@extends('layout2')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

<div class = "well">
<a href="/products/add" class="btn btn-small btn-success">Add New</a>
</div>
   
<table class="table table-bordered">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Rating</th>
        <th>Action</th>
        </tr>
    </thead>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td> {{ $product->name }}</td>
        <td> {{ $product->price}}</td>
        <td> {{ $product->rating }}</td>
        <td><a class="btn btn-default btn-xs" href="/products/detail/{{ $product->id }}">View</a>
    </tr>
    @endforeach
    </table>

    @endsection
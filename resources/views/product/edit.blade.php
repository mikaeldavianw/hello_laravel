@extends('layout2')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">



<h1>Edit Product</h1>

@if($success)
        <div class="alert alert-success" role="alert">Data sucessfully saved.</div>
    @endif

      <form class="form" method="POST">
        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="{{ $product->name}}">
        </div>
        <div class="form-group">
          <label for="product_price">Product Price</label>
          <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price" value="{{ $product->price}}">
        </div>

        <div class="form-group">
          <label for="rating">Rating</label>
          <div class="input-group">
            <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating" value="{{ $product->rating}}">
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-small">Submit</button>
          <a class="btn btn-success" href="/products">Back to List</a>
        </div>

      </form>

        </div>
    </div>
</div>

@endsection
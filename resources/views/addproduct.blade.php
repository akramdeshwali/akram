@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6 col-sm-offset-3" >
        <div class="">
          <h1>New Product Details</h1>
          <form action="/addproduct" method="POST" class="add-product">
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="name">Price:</label>
              <input type="text" name="price" class="form-control" id="name" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="email">Category:</label>
                <input type="text" name="category" class="form-control"  id="email" placeholder="Category">
              </div>
              <div class="form-group">
                <label for="email">Gallary:</label>
                <input type="text" name="gallary" class="form-control" id="email" placeholder="Please provide image link">
              </div>
            <div class="form-group">
              <label for="pwd">Description:</label>
              <textarea type="text" name="description" class="form-control" id="pwd" placeholder="Description..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
        </div>
    </div>
</div>
@endsection
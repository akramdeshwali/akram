@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6 col-sm-offset-3" >
        <form action="/addproduct" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name"  id="name">
            </div>
            <div class="form-group">
              <label for="name">Price:</label>
              <input type="text" name="price"  id="name">
            </div>
            <div class="form-group">
                <label for="email">Category:</label>
                <input type="text" name="category"  id="email">
              </div>
              <div class="form-group">
                <label for="email">Gallary:</label>
                <input type="text" name="gallary"  id="email" placeholder="image link">
              </div>
            <div class="form-group">
              <label for="pwd">Description:</label>
              <input type="text" name="description"  id="pwd">
            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
@endsection
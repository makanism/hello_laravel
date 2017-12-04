@extends('layout2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add product</h1>
            @if($success)
            <div class="alert alert-success" role="alert">Success</div>
            @endif
            <form class='form' method='POST'>
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product price">
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection
@extends('layout2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Product discount page</h1>
            <form>
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product price">
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <div class="input-group">
                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                    <span class="input-group-addon" id="basic-addon2">%</span>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Output</h2>
            <div class="row">
                <div class="col-md-6">
                Product name 
                </div>
                <div class="col-md-6">
                : {{$productName}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                Product Price 
                </div>
                <div class="col-md-6">
                : Rp {{$productPrice}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                Discount 
                </div>
                <div class="col-md-6">
                : {{$discount}}%
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                Payment 
                </div>
                <div class="col-md-6">
                : Rp {{$payment}}
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
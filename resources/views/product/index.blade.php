@extends('layout2')


@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <a href="/products/add" class="btn btn-small btn-success">Add New</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>price</th>
                    <th>rating</th>
                </tr>
                </thead>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->rating}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
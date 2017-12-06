@extends('layout2')

@section('content')

<div class="container">
    <div class="well">
        <a class="btn btn-success" href="/products/edit/{{$product->id}}">Edit</a>
        <form method="POST" style="display:inline" action="/products/delete">
        <input type = "hidden" name="product_id" value="{{$product->id}}"/>
        <button type ="submit" class="btn btn-danger">Delete</button>
        </form>
        <a class="btn btn-default" href="/products">Back to List</a>
    </div>
    <table>
        <tr>
            <td width="100px">Name</td>
            <td>: {{ $product->name }}</td>
        </tr>
        <tr>
        <td>Price</td>
        <td>: {{ $product->price }}</td>
        </tr>
        <td>Rating</td>
        <td>: {{ $product->rating }}</td>
        </tr>
    </table>
    </div>
@endsection

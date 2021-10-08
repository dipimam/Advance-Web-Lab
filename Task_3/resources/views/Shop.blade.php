@extends('Layout.LayoutafterLogin')
@section('content')
<table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Price</th>

            <th>Description</th>
            <th>Action</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
               
                <td>{{$product->description}}</td>
                <td>{{$product->description}}</td>
                <td><a href="/Product/AddToCart/{{$product->id}}" class="btn btn-primary">Add to Cart</a></td>
             
             
            </tr>
        @endforeach
        <td><a href="/Product/ShowCart" class="btn btn-primary">Show Cart</a></td>
</table>
@endsection
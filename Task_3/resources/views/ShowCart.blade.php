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
        @foreach($cartProduct as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
               
                <td>{{$product->description}}</td>
                <td><a href="/Product/DeleteOrder/{{$product->id}}" class="btn btn-danger">Delete Order</a></td>
                
             
             
            </tr>
        @endforeach
        
</table>
@endsection
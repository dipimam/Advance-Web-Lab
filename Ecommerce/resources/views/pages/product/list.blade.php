@extends('layout.app')
@section('content')

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $item)
    
        <tr>
            <td>{{$item->p_name}}</td>
            <td>{{$item->p_price}}</td>
            <td><img src="{{$item->p_image}}" alt="" width="50px" height="50px"></td>
           <td><a href="{{route('product.addtocart',['id'=>$item->p_id])}}" class="btn btn-primary">Add to Cart</a></td> 
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
@extends('layout.app')
@section('content')

@if($cart==null)

    <p>Cart is empty</p>

@else
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cart as $item)
    
        <tr>
            <td>{{$item->p_id}}</td>
            <td>{{$item->p_quantity}}</td>
            
           
        </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection

<td><a class="btn btn-primary" href="{{route('product.confirmorder')}}">Confirm Order</a></td>


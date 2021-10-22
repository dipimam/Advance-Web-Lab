<a class="btn btn-primary" href="{{route('product.list')}}">Products</a>
<a class="btn btn-primary" href="{{route('product.emptycart')}}">Empty Cart</a>
<a class="btn btn-primary" href="{{route('product.showcart')}}">My Cart</a>

@if(session()->has('username'))
<a class="btn btn-primary" href="{{route('product.myorder')}}">My order</a>
<a class="btn btn-primary" href="{{route('customer.logout')}}">Logout</a>
@endif

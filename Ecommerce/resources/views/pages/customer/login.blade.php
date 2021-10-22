@extends('layout.app')
@section('content')
<form action="{{route('customer.login')}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label for="c_phone">Phone</label>
    <input type="number" class="form-control" id="c_phone" name="c_phone"  placeholder="Enter Phone">
    @error('c_phone')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="c_password">Password</label>
    <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Password">
    @error('c_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
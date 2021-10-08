<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('Layout.layout')
@section('content')

<form action="/login" method="post">
{{csrf_field()}}
        
 
  <div class="form-group">
    <label for="phone">Email:</label>
    <input type="int" class="form-control" id="phone" name='phone' placeholder="Enter Phone">
    @error('s_email')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    @error('s_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
</body>
</html>
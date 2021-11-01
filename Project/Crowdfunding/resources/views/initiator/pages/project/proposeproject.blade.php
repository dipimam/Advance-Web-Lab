<link rel="stylesheet" href="/css/initiator/changepicture.css">

@extends('initiator.layout.dashboard')
@section('dashboard_content')
<form enctype="multipart/form-data" action="{{route('project.proposeproject')}}" method="post">
{{csrf_field()}}

<div class="form-group">
    <label for="p_name">Project Title</label>
    <input type="text" class="form-control" id="p_name" name="p_name" value="{{old('p_name')}}" placeholder="Enter Title">
    @error('p_name')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
  <label for="p_image" class="">Demo Picture</label>
  <input class="form-control" type="file" id="p_image" name="p_image">
  @error('p_image')
                <span class="text-danger">{{$message}}</span>
     @enderror
</div>
  <div class="form-group">
    <label for="p_description">Description</label>
    <textarea class="form-control" id="p_description" name="p_description" rows="3" value="{{old('p_description')}}"></textarea>
    @error('p_description')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
 
  <div class="form-group">
    <label for="p_deadline">Deadline</label>
    <input type="date" class="form-control" id="p_deadline" name="p_deadline" value="{{old('p_deadline')}}"  placeholder="Enter Deadline">
    @error('p_deadline')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="p_amount">Amount</label>
    <input type="number" class="form-control" id="p_amount" name="p_amount" value="{{old('p_amount')}}"  placeholder="Enter Amount">
    @error('p_amount')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
<link rel="stylesheet" href="/css/project/projectdetails.css">

@extends('initiator.layout.dashboard')
@section('dashboard_content')

<div class="search">
    <div class="row height d-flex justify-content-center align-items-center">
    
        <div class="col-md-8">
            <div class="search">
              <form action="{{route('project.searchdonation',['id' => $data['p_id']])}}" method="get">
              <i class="fa fa-search"></i> 
            <input type="text" class="form-control" name='search' placeholder="Search by Number">
             <button type="submit" class="btn btn-primary">Search</button> 
            </div>
             </form> 
        </div>
        
    </div>
   
</div>


<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">TRANSATION ID</th>
      <th scope="col">TIME</th>
      <th scope="col">DONATED BY</th>
      <th scope="col">DONATOR PHONE</th>
      <th scope="col">DONATED AMOUNT</th>
    </tr>
  </thead>
  <tbody>
  @php
  $sum=0;
  @endphp
  @foreach($data['donation'] as $data)

    <tr>
      
      <td>{{$data->tran_id}}</td>
      <td>{{$data->time}}</td>
      <td>{{$data->donor->d_name}}</td>
      <td>{{$data->donor->d_phone}}</td>
      <td>{{$data->amount}}</td>
    
    </tr>
    @php
    $sum+=$data->amount;
    @endphp
 @endforeach
 <tr>
      
      <td></td>
      <td></td>
      <td></td>
      <td>Total</td>
      <td>{{$sum}}</td>
    
    </tr>
    

  </tbody>
</table>
@endsection
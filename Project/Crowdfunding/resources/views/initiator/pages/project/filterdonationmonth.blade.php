<link rel="stylesheet" href="/css/project/projectdetails.css">

@extends('initiator.layout.dashboard')
@section('dashboard_content')


<div class="dropdown ">
  <button onclick="myFunction1()" class="dropbtn">Month <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
  <div id="myDropdown1" class="dropdown-content">
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '01'])}}">January </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '02'])}}">February </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '03'])}}">March </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '04'])}}">April </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '05'])}}">May </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '06'])}}">June </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '07'])}}">July </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '08'])}}">August </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '09'])}}">September </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '10'])}}">October </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '11'])}}">November </a>
    <a href="{{route('project.filterdonationmonth',['filtermonth' => '12'])}}">December </a>

   
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
  @foreach($data as $data)

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


<script>
  function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
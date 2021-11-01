<link rel="stylesheet" href="/css/project/projectdetails.css">

@extends('initiator.layout.dashboard')
@section('dashboard_content')

<div class="search">
    <div class="row height d-flex justify-content-center align-items-center">
    
        <div class="col-md-8">
            <div class="search">
              <form action="{{route('project.searchproject')}}" method="get">
              <i class="fa fa-search"></i> 
            <input type="text" class="form-control" name='search' placeholder="Search by Title">
             <button type="submit" class="btn btn-primary">Search</button> 
            </div>
             </form> 
        </div>
        
    </div>
   
</div>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Status <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="{{route('project.filterprojectstatus',['filterstatus' => 'processing'])}}">Processing</a>
    <a href="{{route('project.filterprojectstatus',['filterstatus' => 'approved'])}}">Approved</a>
  </div>
</div>





<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">TITLE</th>
      <th scope="col">NEEDED AMOUNT</th>
      <th scope="col">DEADLINE</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($project as $data)
    <tr>
      
      <td>{{$data->p_name}}</td>
      <td>{{$data->p_amount}}</td>
      <td>{{$data->p_deadline}}</td>
      <td><label class="btn btn-warning">{{$data->p_status}}</label></td>
      @if($data->p_status=='approved')
      <td><a href="{{route('project.donationhistory',['id' => $data->p_id])}}" class="btn btn-info">Donation History</a></td>
      @else
      <td><label class="btn btn-secondary">No Donations</label></td>
      @endif
    </tr>

 @endforeach
    
    
 
  </tbody>
</table>
@endsection


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
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
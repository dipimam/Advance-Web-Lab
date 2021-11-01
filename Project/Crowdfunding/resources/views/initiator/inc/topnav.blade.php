<link rel="stylesheet" href="/css/inc/topnav.css">


<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" > 
    
  <a class="navbar-brand" href="#"><img src="https://t3.ftcdn.net/jpg/03/43/04/60/360_F_343046073_JA5fNMA3wWpdFGZ3LxAklLYm3p4dyli8.jpg" alt="" width="90px" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav ms-auto">



     @if(!Session::has('initiator.email'))
      <li class="nav-item">
        <a class="nav-link" href="{{route('initiator.login')}}">Login</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('initiator.registration')}}">Registration</a>
      </li>
      @else
      <div class="profile">
      <a href="{{route('initiator.dashboard')}}" class="d-flex align-items-center  text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
      <li class="nav-item ">
      @php
         $image= Session::get('initiator.image')
      @endphp
 
     <img src="{{asset('/storage/uploads/'. $image .'')}}" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNL_ZnOTpXSvhf1UaK7beHey2BX42U6solRA&usqp=CAU" width="32" height="32" class="rounded-circle me-2">
     <strong > 
       @if(Session::has('initiator.name'))
       {{Session::get('initiator.name')}}
       @endif
        </strong>  
        </li>
        </a>
        </div>
      @endif


      <li class="nav-item ">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About</a>
      </li>
    
</ul>
  </div>
</nav>

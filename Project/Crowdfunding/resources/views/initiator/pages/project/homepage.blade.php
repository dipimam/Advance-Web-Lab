@extends('initiator.layout.dashboard')
@section('dashboard_content')
<link rel="stylesheet" href="/css/project/homepage.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div id="main-content" class="blog-page">
        
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                    @foreach($project as $post)
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                            @php
                            $image= $post->p_image
                            @endphp
                            <img src="{{asset('/storage/uploads/'. $image .'')}}" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNL_ZnOTpXSvhf1UaK7beHey2BX42U6solRA&usqp=CAU" width="900px"  class="d-block img-fluid">
                               
                            </div>
                            <h3><a href="blog-details.html">{{$post->p_name}}</a></h3>
                            <p>{{$post->p_description}}</p>
                        </div>                        
                    </div>
                   
                    
                    <div class="card comment">
                            <div class="header">
                                <h2>Comments </h2>
                            </div>
                            <div class="body">
                                <ul class="comment-reply list-unstyled">
                                @foreach($post->review as $comment)
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4">
                                            
                                            @php
                                             $image= $comment->donor->d_image
                                             @endphp
                                            <img src="{{asset('/storage/uploads/'. $image .'')}}" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNL_ZnOTpXSvhf1UaK7beHey2BX42U6solRA&usqp=CAU"   width="70" height="90" class="rounded-circle me-2">
                                        </div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">{{$comment->donor->d_name}}</h5>
                                            <p>{{$comment->comment}}</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">{{$comment->time}}</a></li>
                                                <!-- <li><a href="javascript:void(0);">Reply</a></li> -->
                                            </ul>
                                        </div>
                                    </li>
                                    <br>
                                 @endforeach
                                </ul>                                        
                            </div>
                        </div>
                        @endforeach
                        </div>

                        
                </div>
                   

        </div>
    </div>

    @endsection
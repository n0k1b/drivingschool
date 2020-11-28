@extends('layout.app')
@section('content')
<div class="content">
            <div class="teacher">
               
                <div class="teacher-list">
                    <div class="container">
                        
                        <ul class="teacher-list__list row">
                        @foreach($instructors as $instructor)
                            <li class="teacher-list__item col-md-4">
                                <div class="badge">
                                    <a href="teacher.html" class="badge__wrap">
                                        <div class="badge__head">
                                            <div class="badge__fig">
                                                <img width="100%" height = "100%" src="{{asset('images')}}/{{$instructor->image}}" alt="" />
                                            </div>
                                            <div class="badge__head-body">
                                                <div class="badge__name">{{$instructor->name}}</div>
                                            
                                            </div>
                                        </div>
                                        <div class="badge__body">
                                            <div class="badge__data">
                                                <p>{{$instructor->description}}</p>
                                            </div>
                                           
                                          
                                        </div>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                       
                        
                        
                            
                       
                            
                          
                            
                       
                        
                        </ul>
                        
                    </div>
                </div>
            </div>
       
        </div>
@endsection
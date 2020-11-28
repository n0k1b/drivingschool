@extends('layout.app')
@section('content')
<div class="content">
            <ul class="card-list">
            @foreach($courses as $course)
                <li class="card-list__item">
                    <div class="card card_theme_cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <figure class="card__fig">
                                        <img width="100%" height = "100%" src="{{asset('images')}}/{{$course->image}}" alt="" />
                                    </figure>
                                </div>
                                <div class="col-md-9">
                                    <div class="card__head">
                                        <h3 class="card__name">{{$course->title}}</h3>
                                        <div class="card__period">{{$course->duration}}</div>
                                    </div>
                                    <div class="card__body">
                                        <p class="card__feature">{{$course->description}}</p>
                                    </div>
                                    <div class="card__footer">
                                        <div class="row">
                                            <div class="card__price col-md-7 col-lg-6">
                                                <div class="card__price-item"><span class="card__price-value">{{$course->price}} </span>BDT</div>
                                               
                                            </div>
                                          
                                            <div class="card__btn-wrap col-md-5 col-lg-6">
                                                <a class="btn card__btn popup-protect-btn" href="#">
                                                <input id="course_id" type="hidden" value="{{$course->id}}">
                                                    <span class="btn__text">Apply for this course</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
              
              
                
            </ul>
          
        </div>
@endsection
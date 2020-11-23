@extends('layout.app')
@section('content')
<div class="content">
            <ul class="card-list">
                <li class="card-list__item">
                    <div class="card card_theme_cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <figure class="card__fig">
                                        <img src="{{asset('assets')}}/images/course/card1.jpg" alt="" />
                                    </figure>
                                </div>
                                <div class="col-md-9">
                                    <div class="card__head">
                                        <h3 class="card__name">How to protect yourself and the car</h3>
                                        <div class="card__period">30 days</div>
                                    </div>
                                    <div class="card__body">
                                        <ul class="card__feature">
                                            <li class="card__feature-item">Prevention of car theft</li>
                                            <li class="card__feature-item">How to protect yourself from theft numbers</li>
                                            <li class="card__feature-item">What should I do if the car took the tow truck</li>
                                            <li class="card__feature-item">How to protect the car against vandalism and theft.</li>
                                            <li class="card__feature-item">How to ensure long engine life.</li>
                                            <li class="card__feature-item">How to take care of the car so that it served as long as possible.</li>
                                            <li class="card__feature-item">How to drive in bad weather conditions.</li>
                                            <li class="card__feature-item">How to keep the look of the car.</li>
                                        </ul>
                                    </div>
                                    <div class="card__footer">
                                        <div class="row">
                                            <div class="card__price col-md-7 col-lg-6">
                                                <div class="card__price-item"><span class="card__price-value">$300 </span>Automatic</div>
                                                <div class="card__price-item"><span class="card__price-value">$400 </span>Mechanics</div>
                                            </div>
                                            <div class="card__btn-wrap col-md-5 col-lg-6">
                                                <a class="btn card__btn popup-protect-btn" href="#">
                                                    <span class="btn__text">buy now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
              
              
                
            </ul>
          
        </div>
@endsection
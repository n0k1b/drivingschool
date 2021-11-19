@extends('layout.app')
@section('content')
<div class="tiser">
            <div id="tiserSlider" class="swiper-container">
                <div class="swiper-wrapper">
                    <div style="background-image: url(assets/images/tiser/tiser2.jpg);" class="tiser__slide swiper-slide">
                        <div class="tiser__body">
                            <div class="container">
                                <div class="row">
                                    <div class="tiser__body-inner">
                                        <div class="tiser__title-wrap">
                                            <h3 class="tiser__title">Auto Car Driving</h3>
                                        </div>
                                        <p class="tiser__desc">Life is always a bumpy road, Eventually you just learn how to drive it</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url(assets/images/tiser/tiser3.jpg);" class="tiser__slide swiper-slide">
                        <div class="tiser__body">
                            <div class="container">
                                <div class="row">
                                    <div class="tiser__body-inner">
                                        <div class="tiser__title-wrap">
                                            <h3 class="tiser__title">Manual Car Driving</h3>
                                        </div>
                                        <p class="tiser__desc">Two wheels move the body, four wheel move your heart</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url(assets/images/tiser/tiser1.jpg);" class="tiser__slide swiper-slide">
                        <div class="tiser__body">
                            <div class="container">
                                <div class="row">
                                    <div class="tiser__body-inner">
                                        <div class="tiser__title-wrap">
                                            <h3 class="tiser__title">Bike Driving</h3>
                                        </div>
                                        <p class="tiser__desc">Stop worryings about the potholes in the road and enjoy the journey.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tiser__pager">
                <div class="container">
                    <div class="tiser__pager-item tiser__pager-item_active">
                        <svg class="tiser__car"><use xlink:href="assets/images/icon.svg#icon_car2"></use></svg>
                        <div class="tiser__pager-name">Light vehicle</div>
                        <div class="tiser__pager-desc">Light Vehicle Driving</div>
                    </div>
                    <div class="tiser__pager-item">
                        <svg class="tiser__truck"><use xlink:href="assets/images/icon.svg#icon_truck"></use></svg>
                        <div class="tiser__pager-name">Heavy Vehicle</div>
                        <div class="tiser__pager-desc">Heavy Vehicle Driving</div>
                    </div>
                    <div class="tiser__pager-item">
                        <svg class="tiser__bus"><use xlink:href="assets/images/icon.svg#icon_bus"></use></svg>
                        <div class="tiser__pager-name">Bike Driving</div>
                        <div class="tiser__pager-desc">Bike Driving Learn</div>
					</div>
					<div class="tiser__pager-item">
                        <svg class="tiser__bus"><use xlink:href="assets/images/icon.svg#icon_bus"></use></svg>
                        <div class="tiser__pager-name">Bus Driving</div>
                        <div class="tiser__pager-desc">Bus Driving Learn</div>
					</div>
					<div class="tiser__pager-item">
                        <svg class="tiser__bus"><use xlink:href="assets/images/icon.svg#icon_bus"></use></svg>
                        <div class="tiser__pager-name">Truck Driving</div>
                        <div class="tiser__pager-desc">Truck Driving Learn</div>
                    </div>
                </div>
            </div>
            <div class="tiser__find">
                <div class="container">

                </div>
            </div>
        </div>

        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about__body">
                            <div class="about__body-inner">
                                <h2 class="title"><span class="title__mark">ABOUT </span>US</h2>
                               <p>
								Bangladesh is an overpopulated city thus vehicles are always in rush on the roads. This unnecessary rush is leading to many unwanted accidents since recent years. To ensure safe roads for the dwellers, the authority has become extremely strict regarding the traffic laws. Thus to drive on the roads, there is not any escape than to know and oblige the rules. Apart from the law fact, safe driving should also be performed by us for our own sake. To have safe roads, we actually have to drive safely. Practical driving training is a must to attain driving skills. Most of the times, people in Bangladesh choose to practice driving from relatives or friends except going to proper driving schools. But to drive safe you must get enrolled into Driving School in Bangladesh.
							   </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="feature">
            <div class="feature__list">
                <div class="container">
                    <div class="feature__row-list row">
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__price"><use xlink:href="assets/images/icon.svg#icon_price"></use></svg>
                            </div>
                            <h3 class="feature__title">EXPERIENCED INSTRUCTOR</h3>
                            <p class="feature__desc">Lorem ipsum Sunt cupidatat reprehenderit cillum reprehenderit incididunt consequat</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__timer"><use xlink:href="assets/images/icon.svg#icon_timer"></use></svg>
                            </div>
                            <h3 class="feature__title">Hostel Facilities</h3>
                            <p class="feature__desc">You can choose your team on weekdays after work or on weekends</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__people"><use xlink:href="assets/images/icon.svg#icon_people"></use></svg>
                            </div>
                            <h3 class="feature__title">AC Large Classroom</h3>
                            <p class="feature__desc">we take into account the age of individual moments.</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__target"><use xlink:href="assets/images/icon.svg#icon_target"></use></svg>
                            </div>
                            <h3 class="feature__title">Job Placement</h3>
                            <p class="feature__desc">to everyone we have our own approach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature__list">
                <div class="container">
                    <div class="feature__row-list row">
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__teacher"><use xlink:href="assets/images/icon.svg#icon_teacher"></use></svg>
                            </div>
                            <h3 class="feature__title">Calm instructor</h3>
                            <p class="feature__desc">practical training for you will be happy.</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__stop"><use xlink:href="assets/images/icon.svg#icon_stop"></use></svg>
                            </div>
                            <h3 class="feature__title">Driving Certificate</h3>
                            <p class="feature__desc">Cars equipped with duplicate pedals - avtoinstruktor always insures you.</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__docs"><use xlink:href="assets/images/icon.svg#icon_docs"></use></svg>
                            </div>
                            <h3 class="feature__title">all documents</h3>
                            <p class="feature__desc">The full package of documents at the end - you get all the documents at the end of</p>
                        </div>
                        <div class="feature__item col-md-3">
                            <div class="feature__icon">
                                <svg class="feature__chair"><use xlink:href="assets/images/icon.svg#icon_chair"></use></svg>
                            </div>
                            <h3 class="feature__title">Reasonable Price</h3>
                            <p class="feature__desc">Equipped classrooms - all done according to the rules and laws</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="numbers">
            <div class="container">
                <div class="row">
                    <ul class="numbers__list">
                        <li class="numbers__list-item col-md-3">
                            <h3 class="numbers__value">10 000+</h3>
                            <p class="numbers__desc">Graduates received the right</p>
                        </li>
                        <li class="numbers__list-item col-md-3">
                            <h3 class="numbers__value">7</h3>
                            <p class="numbers__desc">Years on the market</p>
                        </li>
                        <li class="numbers__list-item col-md-3">
                            <h3 class="numbers__value">578</h3>
                            <p class="numbers__desc">Training hours</p>
                        </li>
                        <li class="numbers__list-item col-md-3">
                            <h3 class="numbers__value">32</h3>
                            <p class="numbers__desc">Number of teachers</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



@endsection

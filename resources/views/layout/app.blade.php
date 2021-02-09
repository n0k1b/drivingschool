<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, minimal-ui" />
        <title>Driving School</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="imagetoolbar" content="no" />
        <meta name="msthemecompatible" content="no" />
        <meta name="cleartype" content="on" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="format-detection" content="address=no" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <link href="{{asset('assets')}}/images/icons/favicon.ico" rel="icon" />
        <meta name="description" content="" />
        <link href="{{asset('assets')}}/styles/app.css" rel="stylesheet" />
        <style>
            .tab_li {
    display: block;
    float: left;
    width: 200px;
    /* adjust */
    height: 50px;
    /* adjust */
    padding: 5px;
    /*adjust*/
}

.tab-group {
    justify-content: center;
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0 0 -8px 0;
}

.tab.active a {
    background: #3FC979;
    padding: 15px;
    color: white;
}



.tab-content>div:last-child {
    display: none;
}
        </style>
    </head>
    <body class="page">
        <div class="popup popup_narrow popup_usual">
            <div class="popup__container container">
                <div class="row">
                    <div class="popup__wrapper col col-md-4 col-sm-6">
                        <div class="popup__head clearfix">
                            <div class="row">
                                <div class="popup__title col-sm-6 col-xs-8">send message</div>
                                <div class="popup__close col-sm-6 col-xs-4"><div class="popup__close__button"></div></div>
                            </div>
                        </div>
                        <div class="popup__body">
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_users"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="text" name="n" placeholder="Enter your name" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_mail"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="email" name="s" placeholder="Enter your E-Mail" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="tel" name="a" placeholder="Enter your Phone" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <textarea class="textarea textarea_fullwidth" placeholder="Message" name="zzz"></textarea>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <button class="btn btn_fullwidth" type="submit">
                                        <span class="btn__text">send message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__bg"></div>
        </div>
        <div class="popup popup_narrow popup_bestsellers">
            <div class="popup__container container">
                <div class="row">
                    <div class="popup__wrapper col col-md-4 col-sm-6">
                        <div class="popup__head clearfix">
                            <div class="row">
                                <div class="popup__title col-sm-6 col-xs-8">send message</div>
                                <div class="popup__close col-sm-6 col-xs-4"><div class="popup__close__button"></div></div>
                            </div>
                        </div>
                        <div class="popup__body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="popup_bestsellers__title">
                                        <svg class="popup_bestsellers__title__icon left"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                        <div class="popup_bestsellers__title__text">bestsellers</div>
                                        <svg class="popup_bestsellers__title__icon right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                    </div>
                                    <div class="popup_bestsellers__num">$ 3 000</div>
                                    <div class="popup_bestsellers__desc">All included</div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_users"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="text" name="n" placeholder="Enter your name" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_mail"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="email" name="s" placeholder="Enter your E-Mail" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <div class="control-group control-group_fullwidth">
                                        <span class="control-remark control-group__item">
                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                        </span>
                                        <span class="inp">
                                            <span class="inp__box">
                                                <input class="inp__control" type="tel" name="a" placeholder="Enter your Phone" />
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <button class="btn btn_fullwidth" type="submit">
                                        <span class="btn__text">send request</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__bg"></div>
        </div>
        <div class="popup popup_wide popup_teacher">
            <div class="popup__container container">
                <div class="row">
                    <div class="popup__wrapper col col-md-7 col-sm-9">
                        <div class="popup__head clearfix">
                            <div class="row">
                                <div class="popup__title col-sm-6 col-xs-8">send message</div>
                                <div class="popup__close col-sm-6 col-xs-4"><div class="popup__close__button"></div></div>
                            </div>
                        </div>
                        <div class="popup__body">
                            <div class="popup_teacher__top row">
                                <div class="popup_teacher__img col col-md-5">
                                    <div><img src="{{asset('assets')}}/images/teacher/b1.jpg" alt="" /></div>
                                </div>
                                <div class="popup_teacher__profile col col-md-7">
                                    <div class="popup_teacher__title">Matsnev Nikolai</div>
                                    <div class="popup_teacher__raring">
                                        <svg class="popup_teacher__raring__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                        <svg class="popup_teacher__raring__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                        <svg class="popup_teacher__raring__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                        <svg class="popup_teacher__raring__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                        <svg class="popup_teacher__raring__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_star"></use></svg>
                                    </div>
                                    <div class="popup_teacher__desc">Suzuki SX4, CHEVROLET CAMARO</div>
                                    <div class="popup_teacher__data">
                                        <div class="popup_teacher__data__item">
                                            <span class="popup_teacher__data__term">Gender:</span>
                                            <span class="popup_teacher__data__separ"></span>
                                            <span class="popup_teacher__data__value">Male</span>
                                        </div>
                                        <div class="popup_teacher__data__item">
                                            <span class="popup_teacher__data__term">Transmission:</span>
                                            <span class="popup_teacher__data__separ"></span>
                                            <span class="popup_teacher__data__value">Mechanics</span>
                                        </div>
                                        <div class="popup_teacher__data__item">
                                            <span class="popup_teacher__data__term">Price:</span>
                                            <span class="popup_teacher__data__separ"></span>
                                            <span class="popup_teacher__data__value">6$/hour</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_users"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="text" name="n" placeholder="Enter your name" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_mail"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="email" name="s" placeholder="Enter your E-Mail" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="tel" name="a" placeholder="Enter your Phone" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <textarea class="popup_teacher__taxtarea textarea textarea_fullwidth" placeholder="Message" name="zzz"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <button class="btn btn_fullwidth" type="submit">
                                        <span class="btn__text">send request</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__bg"></div>
        </div>
        <div class="popup popup_wide popup_protect">
            <div class="popup__container container">
                <div class="row">
                    <div class="popup__wrapper col col-md-7 col-sm-9">
                        <div class="popup__head clearfix">
                            <div class="row">
                                <div class="popup__title col-sm-6 col-xs-8">send message</div>
                                <div class="popup__close col-sm-6 col-xs-4"><div class="popup__close__button"></div></div>
                            </div>
                        </div>
                        <div class="popup__body">
                            <div class="popup_protect__top row">

                                <div class="popup_protect__data col-lg-8 col-md-7">
                                    <div class="popup_protect__def row">
                                        <div class="popup_protect__def__img col">
                                            <img src="{{asset('assets')}}/images/shield.png" alt="" />
                                        </div>
                                        <div class="popup_protect__def__text col">
                                            <div class="popup_protect__def__title">How to pay fee</div>

                                        </div>
                                    </div>

                                    <ul class="tab-group">
                                        <li class="tab active tab_li"><a href="#bkash">Bkash</a></li>
                                        <li class="tab tab_li"><a href="#visa_card">Debit Card</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="bkash">
                                            <ul class="popup_protect__list">
                                                <li class="popup_protect__list-item">Dial *247#</li>
                                                <li class="popup_protect__list-item">Go to payment option</li>
                                                <li class="popup_protect__list-item">Enter 0181818181 as a merchant number</li>
                                                <li class="popup_protect__list-item">Confirm Payment</li>
                                                <li class="popup_protect__list-item">Save the Transaction Number</li>
                                            </ul>
                                            <div class="form__row row">
                                                <div class="col-md-12">
                                                    <div class="control-group control-group_fullwidth">
                                                        <span class="control-remark control-group__item">
                                                            <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                                        </span>
                                                        <span class="inp">
                                                            <span class="inp__box">
                                                                <input class="inp__control" type="tel" id="transaction_number" placeholder="Transaction Number" />
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="visa_card">
                                            <div class="form__row row">


                                                    <div class="control-group control-group_fullwidth">
                                                        <span class="control-remark control-group__item">

                                                        </span>
                                                        <span class="inp">
                                                            <span class="inp__box">
                                                                <input class="inp__control" type="text"  placeholder="Name on your card" />
                                                            </span>
                                                        </span>
                                                    </div>

                                            </div>

                                            <div class="form__row row">


                                                    <div class="control-group control-group_fullwidth">
                                                        <span class="control-remark control-group__item">

                                                        </span>
                                                        <span class="inp">
                                                            <span class="inp__box">
                                                                <input class="inp__control" type="text"  placeholder="Card Number" />
                                                            </span>
                                                        </span>
                                                    </div>

                                            </div>

                                            <div class="form__row row">


                                                    <div class="control-group control-group_fullwidth">
                                                        <span class="control-remark control-group__item">

                                                        </span>
                                                        <span class="inp">
                                                            <span class="inp__box">
                                                                <input class="inp__control" type="text" placeholder="MM/YY" />
                                                            </span>
                                                        </span>
                                                    </div>

                                            </div>

                                            <div class="form__row row">


                                                    <div class="control-group control-group_fullwidth">
                                                        <span class="control-remark control-group__item">

                                                        </span>
                                                        <span class="inp">
                                                            <span class="inp__box">
                                                                <input class="inp__control" type="text"  placeholder="CVC" />
                                                            </span>
                                                        </span>
                                                    </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{url('submit_application')}}" method="POST">
                                        @csrf
                                    <div class="form__row row">

                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_users"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="text" id="student_name" placeholder="Enter your name" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_mail"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="text" id="student_address" placeholder="Enter your address" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="tel" id="student_mobile" placeholder="Enter your Phone" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                        <input class="inp__control" type="tel" id="student_mobile" placeholder="Enter your Phone" />
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_calendar"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                      <select id="day_slot" >
                                                            <option selected disabled>Select Day Slot</option>
                                                            <option value="saturday,monday,wednesday">Saturdat,Monday,Wednesday</option>
                                                            <option value="sunday,tuesday,thursday">Sunday,Tuesday,Thursday</option>
                                                      </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form__row row">
                                        <div class="col-md-12">
                                            <div class="control-group control-group_fullwidth">
                                                <span class="control-remark control-group__item">
                                                    <svg class="control-remark__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets')}}/images/icon.svg#icon_calendar"></use></svg>
                                                </span>
                                                <span class="inp">
                                                    <span class="inp__box">
                                                      <select id="time_slot" >
                                                            <option selected disabled>Select Time Slot</option>
                                                            <option value="10am-1pm">10am-1pm</option>
                                                            <option value="2pm-5pm">2pm-5pm</option>
                                                      </select>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="form__row row">
                                <div class="col-md-12">
                                    <button class="btn btn_fullwidth" type="button" onclick = "test()">
                                        <span class="btn__text">Send</span>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__bg"></div>
        </div>
        <div class="bar-social">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-xs">
                        <p class="bar-social__text">Lessons From just $20 Per Hour or 5 Lessons for $120 or 10 Hours For $180</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="bar-social__list">
                            <li class="bar-social__list-item">
                                <a href="#" class="bar-social__link">
                                    <svg class="bar-social__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_vk"></use></svg>
                                </a>
                            </li>
                            <li class="bar-social__list-item">
                                <a href="#" class="bar-social__link">
                                    <svg class="bar-social__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_facebook"></use></svg>
                                </a>
                            </li>
                            <li class="bar-social__list-item">
                                <a href="#" class="bar-social__link">
                                    <svg class="bar-social__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_twitter"></use></svg>
                                </a>
                            </li>
                            <li class="bar-social__list-item">
                                <a href="#" class="bar-social__link">
                                    <svg class="bar-social__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_instagram"></use></svg>
                                </a>
                            </li>
                            <li class="bar-social__list-item">
                                <a href="#" class="bar-social__link">
                                    <svg class="bar-social__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_ok"></use></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header__row container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo">
                            <a href="index-2.html" class="logo__link">
                                <img src="{{asset('assets')}}/images/logo.png" alt="Driving School" />
                            </a>
                        </div>
                    </div>
                    <div class="header__contact col-md-3">
                        <div class="header__address">
                            <svg class="header__pin"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_pin"></use></svg>Matvey street, russia
                        </div>
                    </div>
                    <div class="header__contact col-md-2">
                        <a href="tel:+908887775544" class="header__phone">
                            <svg class="header__phone-icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_phone"></use></svg>+ 90 888 777 5544
                        </a>
                    </div>
                    <div class="header__contact col-md-2">
                        <a class="btn header__callback" href="#">
                            <span class="btn__text">Call me</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav">
                <div class="nav__btn-wrap">
                    <button class="btn nav__btn" type="button">
                        <span class="btn__text">
                            <span class="nav__icon"></span>
                        </span>
                    </button>
                </div>
                <div class="nav__body container">
                    <div class="nav__inner">
                        <div class="nav__close"></div>
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="{{url('/')}}" class="nav__link nav__link_has-sub nav__link_active">Home</a>

                            </li>

                            <li class="nav__item">
                                <a href="{{url('feature')}}" class="nav__link">features</a>
                            </li>


                            <li class="nav__item">
                                <a href="{{url('course')}}" class="nav__link">courses</a>
                            </li>
                            <!-- <li class="nav__item">
                                <a href="review.html" class="nav__link">reviews</a>
                            </li> -->
                            <!-- <li class="nav__item">
                                <a href="photo.html" class="nav__link">photo</a>
                            </li> -->
                            <!-- <li class="nav__item">
                                <a href="blog.html" class="nav__link nav__link_has-sub">blog</a>
                                <ul class="nav__sub">
                                    <li class="nav__item">
                                        <a href="blog.html" class="nav__link">Page Blog</a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="article.html" class="nav__link">Single Blog</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav__item">
                                <a href="address.html" class="nav__link">contacts</a>
                            </li> -->
                            <li class="nav__item">
                                <a href="{{url('instructor')}}" class="nav__link">Instructor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')




        <div class="footer">
            <div class="nav">
                <div class="nav__btn-wrap">
                    <button class="btn nav__btn" type="button">
                        <span class="btn__text">
                            <span class="nav__icon"></span>
                        </span>
                    </button>
                </div>

            </div>
            <div class="footer__body container">
                <div class="row">
                    <div class="footer__section col-md-3">
                        <div class="footer__about">
                            <h4 class="footer__title">about</h4>
                            <p class="footer__text">
                                have been serving NYC with its 8 branches and completed 5k+ students in last 10 years. We have a team of experienced and certified trainers who will help you from the start to end of a driving lesson.
                            </p>
                            <div class="logo footer__logo">
                                <a href="index-2.html" class="logo__link">
                                    <svg class="logo__icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_logo"></use></svg>
                                    <span class="logo__text">driving school</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__section col-md-3">
                        <div class="footer__blog">
                            <h4 class="footer__title">blog</h4>
                            <article class="footer__post">
                                <a href="#" class="footer__post-wrap">
                                    <h5 class="footer__post-title">Mountains car travel</h5>
                                    <p class="footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</p>
                                </a>
                            </article>
                            <article class="footer__post">
                                <a href="#" class="footer__post-wrap">
                                    <h5 class="footer__post-title">Mountains car travel</h5>
                                    <p class="footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</p>
                                </a>
                            </article>
                            <a href="#" class="footer__more">
                                See all posts
                                <svg class="footer__more-icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_right"></use></svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__section col-md-3">
                        <div class="footer__instagramm">
                            <h4 class="footer__title">Instagram</h4>
                            <ul class="footer__instagramm-list">
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i1.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i1.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i2.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i2.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i3.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i3.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i4.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i4.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i5.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i5.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i6.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i6.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i7.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i7.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i8.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i8.jpg" alt="" />
                                    </a>
                                </li>
                                <li class="footer__instagramm-item">
                                    <a href="{{asset('assets')}}/images/inst/i9.jpg" class="footer__instagramm-link">
                                        <svg class="zoom"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_search"></use></svg>
                                        <img src="{{asset('assets')}}/images/inst/i9.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="footer__more">
                                See all posts
                                <svg class="footer__more-icon"><use xlink:href="{{asset('assets')}}/images/icon.svg#icon_right"></use></svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__section col-md-3">
                        <div class="footer__hours">
                            <h4 class="footer__title">Opening Hours</h4>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Monday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 18:00</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Tuesday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 18:00</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Wednesday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 18:00</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Thursday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 18:00</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Friday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 18:00</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Saturday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">08:00 - 13:30</div>
                            </div>
                            <div class="footer__hours-item">
                                <div class="footer__hours-day">Sunday</div>
                                <div class="footer__hours-separ"></div>
                                <div class="footer__hours-time">Closed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dev">
            <div class="container">
                <div class="dev__item">
                    <a href="http://standard-it.group/" class="dev__link">Web development standard-it.group</a>
                </div>
            </div>
        </div>
        <script>
            window.jQuery || document.write('<script src="{{asset('assets')}}/scripts/jquery-3.1.0.min.js"><\/script>');
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRrnhl1mCfuWpxL4Ame0cyS8fcV7xoyLk"></script>
        <script src="{{asset('assets')}}/scripts/jquery.formstyler.js"></script>
        <script src="{{asset('assets')}}/scripts/jquery.countdown.js"></script>
        <script src="{{asset('assets')}}/scripts/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('assets')}}/scripts/swiper.min.js"></script>
        <script src="{{asset('assets')}}/scripts/jquery.knob.js"></script>
        <script src="{{asset('assets')}}/scripts/rome.min.js"></script>
        <script src="{{asset('assets')}}/scripts/imagesloaded.min.js"></script>
        <script src="{{asset('assets')}}/scripts/isotope.pkgd.min.js"></script>
        <script src="{{asset('assets')}}/scripts/app.js"></script>
    </body>

    <!-- Mirrored from drivingschool.wpmix.net/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 09:38:48 GMT -->
</html>
<script>
    $('.tab a').on('click', function(e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });
</script>
<script>


$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log("Jquery running!");
})
 function test()
 {
     var formdata = new FormData();
     formdata.append('student_name',$("#student_name").val());
     formdata.append('student_mobile',$("#student_mobile").val());
     formdata.append('student_address',$("#student_address").val());
     formdata.append('transaction_number',$("#transaction_number").val());
     formdata.append('course_id',$("#course_id").val());

    formdata.append('time_slot',$("#time_slot").val());
    formdata.append('day_slot',$("#day_slot").val());

    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        data:formdata,
        url: 'submit_application',
        success: function (data) {
          alert('Application Submited');
          location.reload();
        }
    })
 }
</script>

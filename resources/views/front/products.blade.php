@extends('layout.master')
@section('content')

    <div class="page-title page-title-blog bg-pattern" data-bgcolor="BB2226">
        <div class="page-title-overlay">
            <div class="container">

                <h1>OUR PRODUCTS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ea earum, esse exercitationem illum impedit ipsum iste magnam, non numquam, obcaecati quae quas quidem recusandae reprehenderit similique unde voluptatibus?</p>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">

                <ol class="breadcrumb">
                    <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Our Products </a></li>
                    <li class="active">Products</li>
                </ol>

            </div>
        </div>
    </div>
    <hr/>

    <div class="doctors doctors-2">
        <div class="container">
            <div class="row">

                <h2 class="section-title">SEE <span class="bold700">OUR PRODUCTS</span></h2>

                <div class="doctors-container">
                    @foreach ($posts as $post)
                    <div class="doctors-item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image ">
                                 <img src='{{asset("images/posts/$post->image")}}' alt=" Products" height="170" width="254" />
                            </div>
                            <div class="doctors-item-name">$ {{$post->product_price}}</div>
                            <div class="doctors-item-name">{{$post->product_title}}</div>
                            <div class="doctors-item-position" style="height:50px; ">{{$post->product_description}}</div>
                        </div>

                        <div class="doctors-item-button">
                            <a href="{{$post->button_link }}" class="fancybox-1 btn btn-default"><span class="plus">+</span> PLACE AN ORDER</a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


    <!-- =========================
    POPUP FORMS
============================== -->
    <div class="bookform bookform-1" id="bookform1">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
                        <select id="form-doctor" class="form-doctor" name="form-doctor">
                            <option value="1" selected="selected">Select products</option>
                            <option value="2">Arnie </option>
                            <option value="3">Wyatt </option>
                            <option value="4">Dustin </option>
                            <option value="5">Kristin</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name1" id="name1" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone1" id="phone1" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email1" id="email1" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker1" name="date1" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker1" name="time1" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message1" id="message1" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="bookform-right-info-1">
                <h5> Lorem ipsum dolor sit amet</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

            </div>

            <div class="bookform-right-info-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>

        </div>
    </div>



    <div class="bookform" id="bookform2">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name2" id="name2" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone2" id="phone2" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email2" id="email2" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker2" name="date2" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker2" name="time2" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message2" id="message2" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close2" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="frontend/images/doctor1.jpg" alt="" />
                </div>
                <div class="doctor-info-name">
                    Wyatt Esmond
                </div>
                <div class="doctor-info-position">
                    General Dentist
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="frontend/images/clock.png" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>

    <div class="bookform" id="bookform3">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name3" id="name3" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone3" id="phone3" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email3" id="email3" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker3" name="date3" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker3" name="time3" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message3" id="message3" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close3" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="frontend/images/doctor2.jpg" alt="" />
                </div>
                <div class="doctor-info-name">
                    Arnie Alban
                </div>
                <div class="doctor-info-position">
                    Pedodontics
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="frontend/images/clock.png" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>

    <div class="bookform" id="bookform4">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name4" id="name4" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone4" id="phone4" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email4" id="email4" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker4" name="date4" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker4" name="time4" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message4" id="message4" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close4" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="frontend/images/doctor3.jpg" alt="" />
                </div>
                <div class="doctor-info-name">
                    Dustin Callahan
                </div>
                <div class="doctor-info-position">
                    Ortodontist
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="frontend/images/clock.png" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>



    <div class="bookform" id="bookform5">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name5" id="name5" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone5" id="phone5" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email5" id="email5" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker5" name="date5" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker5" name="time5" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message5" id="message5" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close5" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="frontend/images/doctor4.jpg" alt="" />
                </div>
                <div class="doctor-info-name">
                    Kristin Weaver
                </div>
                <div class="doctor-info-position">
                    Hygienist
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="frontend/images/clock.png" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>



    <div class="bookform" id="bookform6">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name6" id="name6" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone6" id="phone6" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email6" id="email6" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker6" name="date6" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker6" name="time6" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message6" id="message6" placeholder="Your message.."></textarea>
                    </div>
                </div>
                <div class="row" style="display:none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
                        <label class="fl_label" for="last">Honeypot:</label>
                        <input type="text" name="last" value="" id="last" class="form-control fl_input">
                    </div>
                </div>
                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close6" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
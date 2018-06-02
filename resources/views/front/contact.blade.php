@extends('layout.master')
@section('content')
    <div class="page-title page-title-contacts bg-pattern" data-bgcolor="BB2226">
        <div class="page-title-overlay">
            <div class="container">
                @include('admin.includes.info-box')
                <h1>CONTACT US</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea exercitationem fugiat illo libero odio qui ratione, sit temporibus. Aperiam at blanditiis corporis eaque molestias quasi. Consequuntur ea eius ipsum provident.</p>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">

                <ol class="breadcrumb">
                    <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Contact us</li>
                </ol>

            </div>
        </div>
    </div>
    <hr/>
    <div class="map" id="map">
    </div>
    <div class="map-info-container">
        <div class="map-info" id="map-info">
            <div class="map-info-contacts">
                <div class="map-info-phone">
                    <i class="fa fa-phone"></i> <span>120 852-4632</span>
                </div>
                <div class="map-info-mail">
                    <i class="fa fa-envelope"></i> <span><a href="mailto:office@dantal.com">office@lorem.com</a></span>
                </div>
                <div class="map-info-location">
                    <i class="flaticon-navigation-arrow"></i> <span>Lorem <br>Lorem Spam</span>
                </div>
            </div>
            <div class="map-info-socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-skype"></i></a>
            </div>
        </div>
    </div>

    <div class="get">
        <div class="container">
            <div class="row">

                <h2 class="section-title">how to get Us</h2>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                    <div class="get-item-icon">
                        <i class="fa fa-subway"></i>
                    </div>
                    <h4 class="get-item-title">Subway</h4>
                    <p class="get-item-text">Lorem ipsum dolor sit amet, consectetur<br>adipisicing elit, sed do eiusmod aliqua. </p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                    <div class="get-item-icon">
                        <i class="fa fa-car"></i>
                    </div>
                    <h4 class="get-item-title">Car</h4>
                    <p class="get-item-text">Lorem ipsum dolor sit amet,<br>TLorem ipsum dolor sit amet</p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                    <div class="get-item-icon">
                        <i class="fa fa-bus"></i>
                    </div>
                    <h4 class="get-item-title">Bus</h4>
                    <p class="get-item-text">Lorem ipsum dolor sit amet - 10, 12, 24, 27,<br>52, 54, 64. </p>
                </div>

            </div>
        </div>
    </div>


    <div class="make">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 make-text">
                    <h2>PLACE AN ORDER</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur dignissimos doloribus ducimus ea esse excepturi, inventore iste iure molestias nobis non nulla odit pariatur sapiente sint temporibus ullam voluptas?</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 make-button">
                    <a href="#bookform1" class="fancybox-2 btn btn-default"><span class="plus">+</span> PLACE AN ORDER</a>
                </div>

            </div>
        </div>
    </div>

    <div class="feedback">
        <div class="container">
            <div class="row">

                <h2 class="section-title"><span class="bold700">CONTACT US</span></h2>

                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit maiores totam voluptatem. Atque aut beatae culpa debitis enim harum, incidunt ipsam iure, nesciunt provident quia quo rerum unde! Quisquam, recusandae?</p>

                <form action="{{route('contact.send')}}" method="get" class="form-horizontal">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                                <input type="text" name="sender" id="name" data-validation="required" placeholder="Your name" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                                <input type="text" name="email" id="email" placeholder="E-mail" />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                                <input type="text" name="subject" id="" data-validation="required" placeholder="Subject" />
                                <div class="help help-sm help-red">!</div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                                <textarea name="body" id="message" data-validation="required" placeholder="Your message.."></textarea>
                                <div class="help help-sm help-red">!</div>
                            </div>

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
                            <button class="btn btn-primary">SEND</button>
                        </div>
                    </div>

                </form>

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
    <!-- =========================
        END POPUP FORMS
    ============================== -->


@endsection
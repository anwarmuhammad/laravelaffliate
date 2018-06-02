@extends('layout.master')
@section('content')
    <div id="slider" class="slider">
        <div class="sp-slides">

            <!-- HEADER SLIDER ITEM -->
            <div class="sp-slide">
                <img class="sp-image" src="frontend/css/images/blank.gif" alt=""
                     data-src="frontend/images/slide_01.jpg" />
                <div class="container">
                    <h3 class="sp-layer slider-welcome"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="0" data-hide-delay="0">
                        Welcome Dental Clinic
                    </h3>

                    <h1 class="sp-layer slider-title"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200">
                        It is quite simple!
                    </h1>

                    <h2 class="sp-layer slider-subtitle"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="400" data-hide-delay="400">

                    </h2>

                    <p class="sp-layer slider-text"
                       data-position="leftCenter" data-horizontal="15" data-vertical="80"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="600" data-hide-delay="600">
                    </p>

                    <p class="sp-layer slider-button"
                       data-position="leftCenter" data-horizontal="15" data-vertical="300"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="800" data-hide-delay="800">
                        {{--<a href="#" class="btn btn-primary"></a>--}}
                    </p>

                </div>
            </div>

            <!-- HEADER SLIDER ITEM -->
            <div class="sp-slide">
                <img class="sp-image" src="frontend/css/images/blank.gif" alt=""
                     data-src="frontend/images/slide_02.jpg" />
                <div class="container">
                    <h3 class="sp-layer slider-welcome"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="0" data-hide-delay="0">

                    </h3>

                    <h1 class="sp-layer slider-title"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200">

                    </h1>

                    <h2 class="sp-layer slider-subtitle"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="400" data-hide-delay="400">

                    </h2>

                    <p class="sp-layer slider-text"
                       data-position="leftCenter" data-horizontal="15" data-vertical="80"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="600" data-hide-delay="600">
                    </p>

                    <p class="sp-layer slider-button"
                       data-position="leftCenter" data-horizontal="15" data-vertical="300"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="800" data-hide-delay="800">
                        {{--<a href="#" class="btn btn-primary">READ MORE</a>--}}
                    </p>

                </div>
            </div>

            <!-- HEADER SLIDER ITEM -->
            <div class="sp-slide">
                <img class="sp-image" src="frontend/css/images/blank.gif" alt=""
                     data-src="frontend/images/slide_03.jpg" />
                <div class="container">

                    <h3 class="sp-layer slider-welcome"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="0" data-hide-delay="0">

                    </h3>

                    <h1 class="sp-layer slider-title"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="200" data-hide-delay="200">

                    </h1>

                    <h2 class="sp-layer slider-subtitle"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="400" data-hide-delay="400">

                    </h2>

                    <p class="sp-layer slider-text"
                       data-position="leftCenter" data-horizontal="15" data-vertical="80"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="600" data-hide-delay="600">
                    </p>

                    <p class="sp-layer slider-button"
                       data-position="leftCenter" data-horizontal="15" data-vertical="300"
                       data-show-transition="left" data-hide-transition="left"
                       data-show-delay="800" data-hide-delay="800">
                        {{--<a href="#" class="btn btn-primary">READ MORE</a>--}}
                    </p>

                </div>
            </div>
        </div>
    </div>
    {{--slider--}}
    {{--services--}}
    <div class="services" id="services">

        <!-- SERVICES ITEM -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-primary-2">
            <div class="service-icon">
                <i class="flaticon-tool"></i>
            </div>
            <br>
            <br>
            <div class="service-title">

            </div>
            <div class="service-text">
                <h3>APPLICATION</h3>
            </div>
        </div>

        <!-- SERVICES ITEM -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-2">
            <div class="service-icon">
                <i class="flaticon-tool"></i>
            </div>
            <br>
            <br>
            <div class="service-title">

            </div>
            <div class="service-text">
                <h3>APPLICATION</h3>
            </div>
        </div>

        <!-- SERVICES ITEM -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-3">
            <div class="service-icon">
                <i class="flaticon-tool"></i>
            </div>
            <div class="service-title">

            </div>
            <br>
            <br>
            <div class="service-text">
                <h3>APPLICATION</h3>
            </div>
        </div>

        <!-- SERVICES ITEM -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-4">
            <div class="service-icon">
                <i class="flaticon-tool"></i>
            </div>
            <div class="service-title">

            </div>
            <br>
            <br>
            <div class="service-text">
                <h3>APPLICATION</h3>

            </div>
        </div>

    </div>

    {{--services--}}

    {{--about--}}

    <div class="about">
        <div class="container">
            <div class="row">

                <!-- ABOUT TEXT -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-text">
                    <h2 class="section-title"><span class="bold700">ABOUT</span> US</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nemo, reprehenderit. Consequatur deleniti, earum eius fugiat ipsam labore nam porro quas quis reprehenderit soluta suscipit tempore ullam veniam voluptatibus voluptatum.</p>
                    <ul class="text-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cum doloremque esse exercitationem explicabo itaque magnam magni mollitia necessitatibus nulla quae quaerat quia quisquam similique suscipit tempore temporibus vel, voluptatum.</p>
                </div>

                <!-- ABOUT BACKGROUND -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-bg" >
                </div>

            </div>
        </div>
    </div>
    {{--about--}}

    <!-- =========================
     CERTIFICATES
============================== -->
    <div class="certs">
        <div class="container">
            <div class="row">

                <h3>Certificates of completion</h3>
                <div class="certs-container">
                    <div class="owl-certs" id="owl-certs">
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert1-b.jpg" class="fancybox"><img src="frontend/images/cert1.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert2-b.jpg" class="fancybox"><img src="frontend/images/cert2.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert3-b.jpg" class="fancybox"><img src="frontend/images/cert3.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert4-b.jpg" class="fancybox"><img src="frontend/images/cert4.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert5-b.jpg" class="fancybox"><img src="frontend/images/cert5.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert1-b.jpg" class="fancybox"><img src="frontend/images/cert1.jpg" alt="" /></a>
                        </div>
                        <!-- CERTIFICATES ITEM -->
                        <div class="certs-item">
                            <a href="frontend/images/cert2-b.jpg" class="fancybox"><img src="frontend/images/cert2.jpg" alt="" /></a>
                        </div>
                    </div>
                    <!-- CERTIFICATES BUTTONS -->
                    <div class="carousel-btn carousel-next" id="next-certs"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-certs"><i class="fa fa-angle-left"></i></div>
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
         END CERTIFICATES
    ============================== -->


    <!-- =========================
         END DOCTORS
    ============================== -->


    <!-- =========================
         BOOKING FORM
    ============================== -->
    <div class="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form">
                    <h2 class="section-title"><span class="bold700">CONTACT US</span></h2>
                    <form>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                                <input type="text" name="name" id="name" data-validation="required" placeholder="Your name" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item phone">
                                <input type="text" name="phone" id="phone" data-validation="required" placeholder="Phone" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item email">
                                <input type="text" name="email" id="email" placeholder="E-mail" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                                <input type="text" class="datepicker-f" id="datepicker" name="date" data-validation="required" placeholder="Date" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                                <input type="text" class="timepicker-f" id="timepicker" name="time" data-validation="required" placeholder="Time" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                                <textarea name="message" id="message" placeholder="Your message.."></textarea>
                            </div>
                        </div>

                        <div class="row latest-row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 booking-form-item">
                                <button class="btn btn-primary">SUBMIT</button>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
         END BOOKING FORM
    ============================== -->


    <!-- =========================
         NUMBERS
    ============================== -->

    <!-- =========================
         END NUMBERS
    ============================== -->


    <!-- =========================
         STORIES
    ============================== -->
    <div class="stories">
        <div class="container">
            <div class="row">

                <h2 class="section-title"><span class="bold700">SUCCESS</span> STORIES</h2>
                <p class="section-subtitle">Happy clients stories</p>

                <div class="certs-container">
                    <div class="owl-stories" id="owl-stories">

                        <!-- STORIES ITEM -->
                        <div class="stories-item">
                            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                <div class="stories-item-name">
                                    Jeanette Evvie
                                </div>
                                <div class="stories-item-position">
                                    Student
                                </div>
                                <div class="stories-item-rating">
                                    <select id="stories-rating-1" name="stories-rating-1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="stories-item-text">
                                    <div class="stories-item-text-quote"><img src="frontend/images/quote.png" alt="" /></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis culpa debitis dolores eos eum exercitationem facere, itaque nemo, numquam odit officiis provident quos reiciendis rem repellendus voluptatem. Impedit, sequi.
                                </div>
                                <div class="stories-item-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequuntur enim itaque magni nobis repudiandae voluptate? Deleniti eos est fugit hic ipsum iusto molestias neque porro possimus sequi, suscipit temporibus.
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                <div class="stories-item-before">
                                    <img src="frontend/images/stories1.jpg" alt="" />
                                    <div class="stories-item-before-title">

                                    </div>
                                </div>
                                <div class="stories-item-after">
                                    <img src="frontend/images/stories2.jpg" alt="" />
                                    <div class="stories-item-after-title">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- STORIES ITEM -->
                        <div class="stories-item">
                            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                <div class="stories-item-name">
                                    Lorem ipsum dolor sit amet
                                </div>
                                <div class="stories-item-position">
                                    Office Manager
                                </div>
                                <div class="stories-item-rating">
                                    <select id="stories-rating-2" name="stories-rating-2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="stories-item-text">
                                    <div class="stories-item-text-quote"><img src="frontend/images/quote.png" alt="" /></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et impedit laborum nam quasi? Laborum nesciunt officia repellat veniam. Blanditiis consequuntur distinctio excepturi obcaecati quae qui reiciendis rerum totam veniam.
                                </div>
                                <div class="stories-item-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam asperiores assumenda cum cumque dolorem eum ex facere illo ipsa iste iure laboriosam laborum molestiae non porro, repellat tempora totam.
                                    <ul>
                                        <li> Lorem ipsum dolor sit amet</li>
                                        <li> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                <div class="stories-item-before">
                                    <img src="frontend/images/stories3.jpg" alt="" />
                                    <div class="stories-item-before-title">

                                    </div>
                                </div>
                                <div class="stories-item-after">
                                    <img src="frontend/images/stories4.jpg" alt="" />
                                    <div class="stories-item-after-title">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-btn carousel-next" id="next-stories"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-stories"><i class="fa fa-angle-left"></i></div>
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
        END STORIES
    ============================== -->


    <!-- =========================
        REVIEW
    ============================== -->
    <div class="review">
        <div class="container">
            <div class="row">

                <h2 class="section-title"><span class="bold700">TESTIMONIALS</span></h2>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, obcaecati, possimus. Eius laboriosam optio quam repudiandae sapiente? Culpa, debitis, dolorem est et itaque laboriosam molestiae necessitatibus placeat recusandae tempora, velit?<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ex ipsam iusto mollitia natus. Ad aliquam cupiditate eaque iste maxime obcaecati, quisquam. Commodi consectetur incidunt, maxime nesciunt nihil non sequi. </p>

                <div class="review-container">
                    <div class="owl-review" id="owl-review">

                        <!-- REVIEW ITEM -->
                        <div class="review-item">
                            <div class="review-item-image">
                                <img src="frontend/images/review1.jpg" alt="" />
                            </div>
                            <div class="review-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur assumenda consequuntur eum facilis hic impedit, laboriosam quam ratione ullam. Accusantium consectetur esse excepturi molestias neque pariatur sed tempore totam? </div>
                            <div class="review-item-name"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-position"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-quote"><img src="frontend/images/quote.png" alt="" /></div>
                        </div>

                        <!-- REVIEW ITEM -->
                        <div class="review-item">
                            <div class="review-item-image">
                                <img src="frontend/images/review2.jpg" alt="" />
                            </div>
                            <div class="review-item-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut eaque earum, eos ex explicabo incidunt ipsa ipsam laboriosam nam officia praesentium, quia quidem quod sapiente similique tenetur veritatis, vero?</div>
                            <div class="review-item-name"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-position"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-quote"><img src="frontend/images/quote.png" alt="" /></div>
                        </div>

                        <!-- REVIEW ITEM -->
                        <div class="review-item">
                            <div class="review-item-image">
                                <img src="frontend/images/review3.jpg" alt="" />
                            </div>
                            <div class="review-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dignissimos laboriosam nam necessitatibus odio. A ab beatae blanditiis distinctio eligendi magni molestias nisi nobis porro sint sit sunt ut, voluptatem? </div>
                            <div class="review-item-name"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-position"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-quote"><img src="frontend/images/quote.png" alt="" /></div>
                        </div>

                        <!-- REVIEW ITEM -->
                        <div class="review-item">
                            <div class="review-item-image">
                                <img src="frontend/images/review4.jpg" alt="" />
                            </div>
                            <div class="review-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, cumque dolor earum enim exercitationem fugiat natus numquam voluptatibus. Ab ad adipisci consequuntur expedita facilis libero quidem quis rerum ullam voluptas!</div>
                            <div class="review-item-name"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-position"> Lorem ipsum dolor sit amet</div>
                            <div class="review-item-quote"><img src="frontend/images/quote.png" alt="" /></div>
                        </div>

                    </div>
                    <!-- REVIEW BUTTONS -->
                    <div class="carousel-btn carousel-next" id="next-review"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-review"><i class="fa fa-angle-left"></i></div>
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
        END REVIEW
    ============================== -->


    <!-- =========================
        BLOG
    ============================== -->
    <div class="blog">
        <div class="container">
            <div class="row">

                <h2 class="section-title">LATEST <span class="bold700">NEWS</span></h2>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur excepturi expedita necessitatibus rem repudiandae velit voluptates. Accusantium alias cum dolores ducimus laudantium natus necessitatibus obcaecati odit, quod similique. Aspernatur.,<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate est exercitationem impedit optio perferendis quo sunt vel. Animi asperiores atque illum obcaecati vero. A dignissimos eos error hic laborum.. </p>

                <div class="blog-container">
                    <div class="owl-blog" id="owl-blog">
                    @foreach ($posts as $post)
                        <!-- BLOG ITEM -->
                        <div class="blog-item">
                            <div class="blog-item-image">
                                <a href="{{url('/blog',['slug'=>$post->slug])}}">
                                    <img src='{{asset("images/posts/$post->image")}}' alt="image" height="250" width="" />
                                </a>
                                <div class="blog-item-date"><i class="fa fa-calendar-o"></i> {{ $post->created_at->format('d/m/y') }}</div>
                                <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 7</div>
                            </div>
                            <div class="blog-item-title"><h3><a href="{{url('/blog',['slug'=>$post->slug])}}"> {{ $post->title }}</a></h3></div>
                            <div class="blog-item-author"><a href="#"> Lorem ipsum dolor sit amet</a></div>
                            <div class="blog-item-text"> {{$p =str_limit($post->body, 250) }}</div>
                            <div class="blog-item-button"><a href="{{url('/blog',['slug'=>$post->slug])}}" class="btn btn-primary-1">READ MORE</a></div>
                        </div>

                       @endforeach

                    </div>
                    <!-- BLOG BUTTONS -->
                    <div class="carousel-btn carousel-next" id="next-blog"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-blog"><i class="fa fa-angle-left"></i></div>
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
        END BLOG
    ============================== -->


    <!-- =========================
        TIPS AND FAQ
    ============================== -->
    <div class="tipsfaq">
        <div class="container">
            <div class="row">

                <!-- TIPS -->
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 tips">
                    <h2 class="section-title"><span class="bold700">TOP TIPS</span> FROM DOCTORS</h2>
                    <!-- TIPS NAVS -->

                    <div class="tips-tabs">

                        <ul class="nav nav-tabs tabs-carousel">
                            @foreach($tips as $tip)
                            <li class="active"><a href="#tips1" data-toggle="tab">{{$tip->title}}</a></li>


                        </ul>
                        <div class="tips-btn tips-next" id="next-tips"><i class="fa fa-angle-right"></i></div>
                        <div class="tips-btn tips-prev" id="prev-tips"><i class="fa fa-angle-left"></i></div>
                    </div>
                    <!-- TIPS ITEMS -->
                    <div class="tips-content">
                        <div class="tab-content">

                            <!-- TIPS ITEM -->
                            <div class="tab-pane fade active in tips-content-item" id="tips1">
                                <div class="tips-content-item-text">
                                              <p>{{$tip->body}}</p>
                                    <div class="tips-content-item-btn">
                                        <a href=# class="btn btn-primary-1">READ MORE</a>
                                    </div>
                                </div>

                                <div class="tips-content-item-image">
                                    <img src="frontend/images/blog_author1.jpg" alt="" />
                                    <div class="tips-content-item-name">
                                        <a href="#">Wyatt Esmond</a>
                                    </div>
                                    <div class="tips-content-item-position">
                                        General Dentist
                                    </div>
                                </div>
                            </div>

                            <!-- TIPS ITEM -->
                            {{--<div class="tab-pane fade tips-content-item" id="tips2">--}}
                                {{--<div class="tips-content-item-text">--}}
                                    {{--<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>--}}
                                    {{--<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>--}}
                                    {{--<div class="tips-content-item-btn">--}}
                                        {{--<a href=# class="btn btn-primary-1">READ MORE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tips-content-item-image">--}}
                                    {{--<img src="frontend/images/blog_author2.jpg" alt="" />--}}
                                    {{--<div class="tips-content-item-name">--}}
                                        {{--<a href="#">Arnie Alban</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="tips-content-item-position">--}}
                                        {{--Pedodontics--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- TIPS ITEM -->--}}
                            {{--<div class="tab-pane fade tips-content-item" id="tips3">--}}
                                {{--<div class="tips-content-item-text">--}}
                                    {{--<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>--}}
                                    {{--<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>--}}
                                    {{--<div class="tips-content-item-btn">--}}
                                        {{--<a href=# class="btn btn-primary-1">READ MORE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tips-content-item-image">--}}
                                    {{--<img src="frontend/images/blog_author3.jpg" alt="" />--}}
                                    {{--<div class="tips-content-item-name">--}}
                                        {{--<a href="#">Dustin Callahan</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="tips-content-item-position">--}}
                                        {{--Orthodontist--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- TIPS ITEM -->--}}
                            {{--<div class="tab-pane fade tips-content-item" id="tips4">--}}
                                {{--<div class="tips-content-item-text">--}}
                                    {{--<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>--}}
                                    {{--<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>--}}
                                    {{--<div class="tips-content-item-btn">--}}
                                        {{--<a href=# class="btn btn-primary-1">READ MORE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tips-content-item-image">--}}
                                    {{--<img src="frontend/images/blog_author4.jpg" alt="" />--}}
                                    {{--<div class="tips-content-item-name">--}}
                                        {{--<a href="#">Kristin Weaver</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="tips-content-item-position">--}}
                                        {{--Hygienist--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- TIPS ITEM -->--}}
                            {{--<div class="tab-pane fade tips-content-item" id="tips5">--}}
                                {{--<div class="tips-content-item-text">--}}
                                    {{--<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>--}}
                                    {{--<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>--}}
                                    {{--<div class="tips-content-item-btn">--}}
                                        {{--<a href=# class="btn btn-primary-1">READ MORE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tips-content-item-image">--}}
                                    {{--<img src="frontend/images/blog_author5.jpg" alt="" />--}}
                                    {{--<div class="tips-content-item-name">--}}
                                        {{--<a href="#">Leslie Adams</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="tips-content-item-position">--}}
                                        {{--Prosthodontics--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- TIPS ITEM -->--}}
                            {{--<div class="tab-pane fade tips-content-item" id="tips6">--}}
                                {{--<div class="tips-content-item-text">--}}
                                    {{--<p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>--}}
                                    {{--<p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>--}}
                                    {{--<div class="tips-content-item-btn">--}}
                                        {{--<a href=# class="btn btn-primary-1">READ MORE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tips-content-item-image">--}}
                                    {{--<img src="frontend/images/blog_author6.jpg" alt="" />--}}
                                    {{--<div class="tips-content-item-name">--}}
                                        {{--<a href="#">Helen Edwards</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="tips-content-item-position">--}}
                                        {{--Pediatric Dentistry--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        </div>
                        @endforeach
                    </div>

                </div>


                <!-- FAQ -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 faq">

                    <h2 class="section-title"><span class="bold700">FAQ</span></h2>
                    @foreach($faqs as $faq)
                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                        <i class="fa fa-medkit"></i> {{$faq->title}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{$faq->body}}
                                </div>

                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- =========================
        END TIPS AND FAQ
    ============================== -->


    <!-- =========================
        CLIENTS
    ============================== -->

    <!-- =========================
        END CLIENTS
    ============================== -->


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
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
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
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
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
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
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
            <h2 class="section-title"><span class="bold700">PLACE AN ORDER</span></h2>
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
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="frontend/images/doctor5.jpg" alt="" />
                </div>
                <div class="doctor-info-name">
                    Leslie Adams
                </div>
                <div class="doctor-info-position">
                    Prosthodontics
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
    <!-- =========================
        END POPUP FORMS
    ============================== -->
@endsection

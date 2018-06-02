@extends('layout.master')
@section('content')
    <div class="page-title page-title-blog bg-pattern" data-bgcolor="BB2226">
        <div class="page-title-overlay">
            <div class="container">

                <h1>LATEST NEWS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. .</p>

            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">

                <ol class="breadcrumb">
                    <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="active">Latest News</li>
                </ol>

            </div>
        </div>
    </div>
    <hr/>
    <div class="blog blog-2">
        <div class="container">

            <div class="row">
                <div class="blog-container col-lg-9 col-md-9 col-sm-9 col-xs-12">

                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="blog-item">
                                    <div class="blog-item-image">
                                        <a href="{{url('/blog',['slug'=>$post->slug])}}">
                                            <img src='{{asset("images/posts/$post->image")}}' alt="image" height="250" width="250" />
                                        </a>

                                        <div class="blog-item-info">
                                            <div class="blog-item-date"><i class="fa fa-calendar-o"></i> {{ $post->created_at->format('d/m/y') }} </div>
                                            <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 12</div>
                                            <div class="blog-item-view"><i class="fa fa-eye"></i> 140</div>
                                            <div class="blog-item-category"><i class="fa fa-folder-o"></i> {{ $post->category->name or 'No Data' }}</div>
                                        </div>
                                    </div>
                                    <div class="blog-item-desc">
                                        <div class="blog-item-title"><h3><a href="{{url('/blog',['slug'=>$post->slug])}}">{{ $post->title }}</a></h3></div>
                                        <div class="blog-item-author"><a href="#">by {{ $post->author }} </a></div>
                                        <div class="blog-item-text">

                                            <p> {{$p =str_limit($post->body, 250) }}</p>

                                        </div>
                                        <div class="blog-item-button"><a href="{{url('/blog',['slug'=>$post->slug])}}" class="fancybox-2 btn btn-primary-1">READ MORE</a>
                                            <a href="{{$post->button_link }}" class=" fancybox-2 btn btn-primary-1">ORDER NOW</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--{{$posts->render()}}--}}
                </div>

                <div class="right-bar col-lg-3 col-md-3 col-sm-3 col-xs-12">

                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Search.." />
                        <button><i class="fa fa-search"></i></button>
                    </div>

                    {{--<div class="right-bar-categories">--}}
                        {{--<h3 class="right-bar-title"><i class="fa fa-folder-open"></i> CATEGORIES</h3>--}}
                        {{--@foreach ($categories as $category)--}}
                            {{--<ul>--}}
                                {{--<li><a href="{{url('/blog-category',['category_id'=>$post->category_id])}}">{{$category->name }}</a></li>--}}

                            {{--</ul>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                    <div class="right-bar-archive">
                        <h3 class="right-bar-title"><i class="fa fa-calendar-o"></i> archive</h3>
                        @foreach ($posts as $post)
                            <ul>
                                <li><a href="#">{{$post->created_at->format('l j F Y')}}<span class="right-bar-archive-tag"></span></a></li>

                            </ul>
                        @endforeach
                    </div>

                    <div class="right-bar-calendar">
                        <input type="text" id="calendar" name="calendar" />
                    </div>

                    {{--<div class="right-bar-tags">--}}
                        {{--<h3 class="right-bar-title"><i class="fa fa-tags"></i> tags</h3>--}}
                        {{--@foreach ($tags as $tag)--}}
                            {{--<a href="#" class="right-bar-tags-item">{{$tag->tag }}</a>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

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
    <!-- =========================
        END POPUP FORMS
    ============================== -->
@endsection




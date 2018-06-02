@extends('layout.master')
@section('content')
    <div class="page-title page-title-blog bg-pattern" data-bgcolor="BB2226">
        <div class="page-title-overlay">
            <div class="container">

                <h1>Search Result</h1>


            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">

                <ol class="breadcrumb">
                    <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="active">{{$query}}</li>
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

                </div>

                <div class="right-bar col-lg-3 col-md-3 col-sm-3 col-xs-12">

                    <form action="{{url('results')}}" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="search">
                            <input type="text" name="query" id="search" placeholder="Search.." />
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>


                    <div class="right-bar-categories">
                        <h3 class="right-bar-title"><i class="fa fa-folder-open"></i> CATEGORIES</h3>
                        @foreach ($categories as $category)
                            <ul>
                                <li><a href="{{url('/blog-category',$category->id)}}">{{$category->name }}</a></li>

                            </ul>
                        @endforeach
                    </div>

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



                </div>

            </div>

        </div>
    </div>


@endsection




@extends('admin.layouts.app')
@section('content')
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            @include('admin.includes.info-box')
            <div class="post">


                <div class="post_body">
                </div>

                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>

                            <th width="200px" nowrap>Post Title</th>
                            <th width="200px" nowrap>Image</th>
                            <th width="200px" nowrap>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                        @foreach ($posts as $post)<?php $i++; ?>

                        <tr class="odd gradeX">

                            <td>
                                <h4>{{ $post->title }}</h4>
                            </td>
                            <td>
                                <img src='{{asset("images/posts/$post->image")}}' alt=""  width="50px" height="50px"/>
                            </td>
                            <td>

                                <a  href="{{url('/edit_post',['id'=>$post->id])}}" class="btn btn-success" style="    background: #39a34b;
    border-color: #39a34b;">Edit</a>
                                <a  href="{{url('/delete_post',['id'=>$post->id])}}" class="btn btn-danger" style="background: #bf2c24;
    border-color: #bf2c24;">Delete</a>

                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            <?php $i=1; ?>
            @foreach ($posts as $post)<?php $i++; ?>

            </div>
            @endforeach

        </div>
    </div>
@endsection
<script type="text/javascript">
    var _token = "{{ Session::token() }}"
</script>
<script type="text/javascript" src="{{ asset('src/js/categories.js') }}"></script>
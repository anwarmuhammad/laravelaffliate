@extends('admin.layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-10 col-md-offset-2">
        @include('admin.includes.info-box')
        <div class="header_info">
            <h4>Create New Post</h4>
        </div>

        <form action="{{ route('admin.dashboard.post.create') }}" method="post" class="form-horizontal"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title" value="{{ Request::old('title') }}" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="product_title" placeholder=" Product Title" value="{{ Request::old('product_title') }}" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="product_description" placeholder="Product Description" value="{{ Request::old('product_description') }}" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="product_price" placeholder="Product Price" value="{{ Request::old('product_price') }}" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Button Link</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="button_link" placeholder="Button Link" value="{{ Request::old('button_link') }}" >
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Author</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Author" value="{{ Request::old('author') }}" >
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Add Categories</label>
                <div class="col-sm-5">
                    <select class="form-control" name="category">
                        <option selected>Select Categories</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    {{-- <ul class="header_info">
                        <li>Technolgy</li>
                    </ul> --}}
                </div>
            </div>

        

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-5">
                    <textarea name="body" class="form-control" rows="8" placeholder="Description">{{ Request::old('body') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4 col-sm-4" for="message">Images :</label>
                <div class="col-md-6 col-sm-6">
                    <div class="row fileupload-buttonbar">
                        <div class="col-md-7">
								             <span class="btn btn-success fileinput-button">
								                <i class="fa fa-plus"></i>
								                <span>Add Images...</span>
								                <input type="file" name="images" id="images" multiple>
								             </span>
                        </div>
                    </div>
                    <br>
                    <div id="">
                        <div class="row" id="images-to-upload">

                        </div>
                    </div>
                    @if ($errors->has('images'))
                        <span class="text-danger">{{ $errors->first('images') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </div>
        </form>
    </div>
    </div>
    @endsection

<script>

    $('#images').on('change',function(e){
        var files = e.target.files;

        $.each(files, function(i, file){
            var reader = new FileReader();

            reader.readAsDataURL(file);

            i=$('img').length;

            reader.onload = function(e){
                var template = '<div class="col-md-3" id="addfile_'+i+'">'+
                    '<img height="100px" class="append_image" id="image_'+i+'" width="100px" src="'+e.target.result+'" alt="" style="margin-top: 27px"> <button type="button" class="close_image" auto= "'+i+'" onclick="myFunction(this.id)" id="'+i+'"><i class="fa fa-times" aria-hidden="true"></i></button>'+
                    '</div>';

                $('#images-to-upload').append(template);
                i++;
            };
        });

    });//

    /*$(".close_image").on('click', function(){

    });*/
    function myFunction(id) {

        $("#addfile_"+id).remove();
    }
</script>
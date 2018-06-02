@extends('admin.layouts.app')
@section('content')
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            @include('admin.includes.info-box')
            <div class="post">
                <div class="header">
                    <form action="{{ route('admin.dashboard.faq.create') }}" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Faq Title</label>
                            <input type="text" class="form-control" id="exampleInputName2" name="title" id="title" placeholder="Faq Title">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputName2">Faq Body</label>
                            <textarea name="body" class="form-control" rows="8" placeholder="Description">{{ Request::old('body') }}</textarea>
                        </div>
                        <br>
                        <br>
                        <div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 50px;">Create FAQ</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </form>
                </div>

                <div class="post_body">
                </div>

                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>

                            <th width="200px" nowrap>Faq Title</th>
                            <th width="200px" nowrap>Faq Body</th>
                            <th width="200px" nowrap>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                        @foreach ($faqs as $faq)<?php $i++; ?>

                        <tr class="odd gradeX">

                            <td>
                                <h4>{{ $faq->title }}</h4>
                            </td>
                            <td>
                                <h4>{{ $faq->body }}</h4>
                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#editfaq<?php echo $i ; ?>" href="" class="btn btn-success" style="    background: #39a34b;
    border-color: #39a34b;">Edit</a>
                                <a data-toggle="modal" data-target="#deletefaq<?php echo $i ; ?>"  href="" class="btn btn-danger" style="background: #bf2c24;
    border-color: #bf2c24;">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            <?php $i=1; ?>
            @foreach ($faqs as $faq)<?php $i++; ?>
            <!-- Edit Modal -->
                <div class="modal fade" id="editfaq<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit faq</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.dashboard.faq.update') }}" method="post" class="form-inline">
                                    <input type="text" class="form-control" id="exampleInputName2" name="title" id="name" value="{{ $faq->title }}">
                                    <input type="text" class="form-control" id="exampleInputName2" name="body" id="name" value="{{ $faq->body }}">
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                    <input type="hidden" name="faq_id" value="{{ $faq->id}}">


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>

                <!--End Edit Modal -->

                <!-- Delete Modal -->
                <div class="modal fade" id="deletefaq<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Delete faq</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.dashboard.faq.delete') }}" method="get" class="form-inline">
                                    Do you want to delete this ?
                                    <input type="hidden" name="faq_id" value="{{ $faq->id}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Delete Modal -->
            </div>
            @endforeach

            <section>
                <nav>
                    <ul class="pager">
                        @if($faqs->currentPage() !== 1)
                            <li class="previous"><a href="{{ $faqs->previousPageUrl() }}"><span aria-hidden="true">&larr;</span> Older</a></li>
                        @endif
                        @if($faqs->currentPage() !== $faqs->lastPage() && $faqs->hasPages())
                            <li class="next"><a href="{{ $faqs->nextPageUrl() }}">Newer <span aria-hidden="true">&rarr;</span></a></li>
                        @endif
                    </ul>
                </nav>
            </section>
        </div>
    </div>
@endsection
<script type="text/javascript">
    var _token = "{{ Session::token() }}"
</script>
<script type="text/javascript" src="{{ asset('src/js/categories.js') }}"></script>
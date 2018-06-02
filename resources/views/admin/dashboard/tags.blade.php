@extends('admin.layouts.app')
@section('content')
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            @include('admin.includes.info-box')
            <div class="post">
                <div class="header">
                    <form action="{{ route('admin.dashboard.tag.create') }}" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Tag Name</label>
                            <input type="text" class="form-control"  name="tag" id="tag" placeholder="tag_ame">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Tag</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </form>
                </div>

                <div class="post_body">
                </div>

                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>

                            <th width="200px" nowrap>Tag name</th>
                            <th width="200px" nowrap>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                        @foreach ($tags as $tag)<?php $i++; ?>

                        <tr class="odd gradeX">

                            <td>
                                <h4>{{ $tag->tag }}</h4>
                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#edittag<?php echo $i ; ?>" href="" class="btn btn-success" style="    background: #39a34b;
    border-color: #39a34b;">Edit</a>
                                <a data-toggle="modal" data-target="#deletetag<?php echo $i ; ?>"  href="" class="btn btn-danger" style="background: #bf2c24;
    border-color: #bf2c24;">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            <?php $i=1; ?>
            @foreach ($tags as $tag)<?php $i++; ?>
            <!-- Edit Modal -->
                <div class="modal fade" id="edittag<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit tag</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.dashboard.tag.update') }}" method="post" class="form-inline">
                                    <input type="text" class="form-control" id="exampleInputName2" name="tag" id="tag" value="{{ $tag->tag }}">
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                    <input type="hidden" name="tag_id" value="{{ $tag->id}}">


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
                <div class="modal fade" id="deletetag<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Delete tag</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.dashboard.tag.delete') }}" method="get" class="form-inline">
                                    Do you want to delete this ?
                                    <input type="hidden" name="tag_id" value="{{ $tag->id}}">
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
                        @if($tags->currentPage() !== 1)
                            <li class="previous"><a href="{{ $tags->previousPageUrl() }}"><span aria-hidden="true">&larr;</span> Older</a></li>
                        @endif
                        @if($tags->currentPage() !== $tags->lastPage() && $tags->hasPages())
                            <li class="next"><a href="{{ $tags->nextPageUrl() }}">Newer <span aria-hidden="true">&rarr;</span></a></li>
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
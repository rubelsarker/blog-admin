@extends('admin.layout')
@section('content')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Tag </h3>
                        <a href="{{route('admin.tags.index')}}" class="btn btn-info pull-right">All Tag</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('admin.tags.update',$tag->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" value="{{$tag->name}}" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a type="button"  href="{{route('admin.tags.index')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>

@endsection
@extends('admin.layout')
@section('stylesheet')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url('')}}/admin/bower_components/select2/dist/css/select2.min.css">
@endsection

@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Post </h3>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-info pull-right">All Posts</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="name" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sub_title" class="col-sm-2 control-label">Sub Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder=" Sub Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="categories[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tags</label>
                                <div class="col-sm-10">
                                    <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" type="file" id="exampleInputFile">
                                </div>

                            </div>
                            <div class="checkbox form-group">
                                <label class="col-sm-3 control-label">
                                    <input value="1" name="status" type="checkbox">publish
                                </label>
                            </div>



                        </div>
                        <!-- SELECT2 EXAMPLE -->

                        <!-- /.box -->

                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Post body</h3>
                            </div>
                            <div class="box-body pad">
                            <textarea id="editor1" name="body" rows="10" cols="80">
                                Post Body text here...
                            </textarea>
                            </div>
                        </div>


                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a type="button"  href="{{route('admin.posts.index')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>

@endsection

@section('script')
    <!-- Select2 -->
    <script src="{{url('')}}/admin/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- CK Editor -->
    <script src="{{url('')}}/admin/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            $('.select2').select2()

        })
    </script>
@endsection
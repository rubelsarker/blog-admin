@extends('admin.layout')
@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('')}}/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Posts</h3>
                    <a class="btn btn-primary pull-right" href="{{route('admin.posts.create')}}">Create Post</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Image</th>
                            <th>Posted By</th>
                            <th>Status</th>
                            <th>Like</th>
                            <th>DisLike</th>
                            <th>Created at</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key => $post)

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->sub_title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{!! $post->body  !!} </td>
                            <td>{{$post->image}}</td>
                            <td>{{$post->posted_by}}</td>
                            <td>{{$post->status}}</td>
                            <td>{{$post->like}}</td>
                            <td>{{$post->dislike}}</td>
                            <td>{{$post->created_at->toDateString()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('admin.posts.show',$post->id)}}"><i class="fa fa-fw fa-eye-slash"></i></a>
                                <a class="btn btn-primary" href="{{route('admin.posts.edit',$post->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                <a class="btn btn-danger" href=""
                                   onclick="if(confirm('Are You Sure, You want to delete this?')){
                                       event.preventDefault();
                                       getElementById('form-delete-{{$post->id}}').submit();
                                   }else {
                                           event.preventDefault();
                                   }
                                ">
                                    <i class="fa fa-fw fa-trash-o"></i>
                                </a>
                                <form action="{{route('admin.posts.destroy',$post->id)}}" method="post" id="form-delete-{{$post->id}}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Image</th>
                            <th>Posted By</th>
                            <th>Status</th>
                            <th>Like</th>
                            <th>DisLike</th>
                            <th>Created at</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{{url('')}}/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
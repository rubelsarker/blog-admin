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
                    <h3 class="box-title">All Tags</h3>
                    <a class="btn btn-primary pull-right" href="{{route('admin.tags.create')}}">Create Tag</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created at</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $key => $tag)

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->slug}}</td>
                            <td>{{$tag->created_at->toDateString()}}</td>
                            <td>{{$tag->updated_at->diffForHumans()}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('admin.tags.show',$tag->id)}}"><i class="fa fa-fw fa-eye-slash"></i></a>
                                <a class="btn btn-primary" href="{{route('admin.tags.edit',$tag->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                <a class="btn btn-danger" href=""
                                   onclick="if(confirm('Are You Sure, You want to delete this?')){
                                       event.preventDefault();
                                       getElementById('form-delete-{{$tag->id}}').submit();
                                   }else {
                                           event.preventDefault();
                                   }
                                ">
                                    <i class="fa fa-fw fa-trash-o"></i>
                                </a>
                                <form action="{{route('admin.tags.destroy',$tag->id)}}" method="post" id="form-delete-{{$tag->id}}" style="display: none;">
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
                            <th>Name</th>
                            <th>Slug</th>
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